<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loan2 extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('camp_model');
    }

    public function loan_request()
{
    // Read and decode the JSON input
    $params = (array) json_decode(file_get_contents('php://input'), TRUE);

    // Check API key
    $api_key = $params['api_key'];
    if ($api_key != 'S5a9P3067Q') {
        exit;
    }

    // Retrieve other parameters
    $mobile = $params['mobile'];
    $employee_type = $params['employee_type'];
    $income = $params['income'];
    $pincode = $params['pincode'];
    $name = $params['name'];
    $email = $params['email'];
    $series = @$params['series'];
    $utm_source = $params['utm_source'];
    $default = $params['default'];

    // Query the database for the source code
    $query = $this->db->get_where('utm_sources', ['welcome_msg' => $utm_source]);
    $result = $query->row();

    // Use source code or default value
    $source = $result ? $result->utm_source : 'H001';

    // Determine series list
    if ($series == 1) {
        $series_list = array(11, 1, 3, 9);
    } else if ($series == 2) {
        $series_list = array(9, 6, 3);
    } else {
        $series_list = 0;
    }

    if ($default == 1) {
        $default = 49;
    }

    // Validate and process mobile number
    if (isset($mobile) && $mobile != '') {
        $data = array(
            'mobile' => $mobile,
            'name' => $name,
            'email' => $email,
            'employee_type' => $employee_type,
            'income' => $income * 12,
            'pincode' => $pincode,
            'utm_source' => $source,
            'welcome_msg' => $utm_source,
            'rd_offer_id' => $default
        );

        // Fetch offers
        $offers = $series_list == 0
            ? $this->camp_model->getAllOfferOrderByPriority(null, $mobile, $data)
            : $this->camp_model->getAllOfferOrderByPriority($series_list, $mobile, $data);

        foreach ($offers as $offer) {
            // Pincode Checking
            if ($offer->pincode_check == "Y") {
                $pincode_check = $this->camp_model->checkPincodeStatus($offer->pincode_table, $pincode);
                $pincode_status = isset($pincode_check->pincode) ? 'Y' : 'N';
                if ($pincode_status == 'N') continue;
            } else {
                $pincode_status = 'Y';
            }

            // Existing Customer Checking
            if ($offer->exist_cust_check == 'Y') {
                $exist_cust_check = $this->camp_model->checkExistCustStatus($offer->exist_cust_table, $mobile);
                $exist_cust_status = isset($exist_cust_check->mobile) ? 'Y' : 'N';
                if ($exist_cust_status == 'Y') continue;
            } else {
                $exist_cust_status = 'N';
            }

            // Process valid offers
            if ($pincode_status == 'Y' && $exist_cust_status == 'N') {
                $data['rd_offer_id'] = $offer->offer_id;
                $lead = $this->camp_model->createLead($data);
                $offer = $this->camp_model->getOfferById($lead->rd_offer_id);
                $base_url = "https://trk.i1x.in/";
                $response_data = array(
                    'offer_id' => $offer->offer_id,
                    'offer_name' => $offer->offer_name,
                    'offer_message' => $offer->offer_message,
                    'offer_icon' => base_url() . "assets/campaign/whatsapp/icons/" . $offer->offer_icon,
                    'offer_image' => base_url() . "assets/campaign/whatsapp/images/" . $offer->offer_image,
                    'offer_interest_rate' => $offer->offer_interest_rate,
                    'offer_loan_amount' => $offer->offer_loan_amount,
                    'offer_url' => str_replace($base_url, '', $offer->offer_url . '' . $source),
                    'name' => $lead->name,
                    'email' => $lead->email,
                    'lead_id' => $lead->lead_id
                );
                if (isset($lead->lead_id)) {
                    $lead->status = 'success';
                    header('Content-Type: application/json; charset=utf-8');
                    header('Cache-Control: max-age=604800');
                    header('Last-Modified: Tue, 22 Feb 2022 22:22:22 GMT');
                    header('ETag: "33a64df5"');
                    echo json_encode($response_data);
                }
                return;
            } else {
                $data['rd_offer_id'] = $default;
            }
        }

        // Fallback offer processing
        $data['utm_source'] = $source;
        $lead = $this->camp_model->createLead($data);
        $offer = $this->camp_model->getOfferById($lead->rd_offer_id);
        $base_url = "https://trk.i1x.in/";
        $response_data = array(
            'offer_id' => $offer->offer_id,
            'offer_name' => $offer->offer_name,
            'offer_message' => $offer->offer_message,
            'offer_icon' => base_url() . "assets/campaign/whatsapp/icons/" . $offer->offer_icon,
            'offer_image' => base_url() . "assets/campaign/whatsapp/images/" . $offer->offer_image,
            'offer_interest_rate' => $offer->offer_interest_rate,
            'offer_loan_amount' => $offer->offer_loan_amount,
            'offer_url' => str_replace($base_url, '', $offer->offer_url . '' . $source),
            'name' => $lead->name,
            'email' => $lead->email,
            'lead_id' => $lead->lead_id
        );
        if (isset($lead->lead_id)) {
            $lead->status = 'success';
            header('Content-Type: application/json; charset=utf-8');
            header('Cache-Control: max-age=604800');
            header('Last-Modified: Tue, 22 Feb 2022 22:22:22 GMT');
            header('ETag: "33a64df5"');
            echo json_encode($response_data);
        }
        return;
    }
}


public function send()
{
    $data = array(
        "messaging_product" => "whatsapp",
        "recipient_type" => "individual",
        "to" => "919182460870",
        "type" => "template",
        "template" => array(
            "name" => "otp_0123",
            "language" => array(
                "code" => "en"
            ),
            "components" => array(
                array(
                    "type" => "body",
                    "parameters" => array(
                        array(
                            "type" => "text",
                            "text" => "8498451119"
                        )
                    )
                ),
                array(
                    "type" => "button",
                    "sub_type" => "url",
                    "index" => "0",
                    "parameters" => array(
                        array(
                            "type" => "payload",  // Use "payload" for URL buttons
                            "payload" => "8498451119"
                        )
                    )
                )
            )
        )
    );

    // Convert data to JSON string
    $jsonData = json_encode($data);

    if ($jsonData === false) {
        // Handle JSON encoding errors
        echo "JSON encoding error: " . json_last_error_msg();
        return;
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://partnersv1.pinbot.ai/v3/415660851631681/messages',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,  // Set a timeout
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $jsonData,  // Send JSON string
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'apikey: 1c00e193-219a-11ef-a50c-02c8a5e042bd'
        ),
    ));

    // Execute request and handle potential errors
    $response = curl_exec($curl);

    if ($response === false) {
        // If cURL execution failed
        $error = curl_error($curl);
        echo "cURL Error: " . $error;
    } else {
        // Success: Output the response
        echo "Response: " . $response;
    }

    curl_close($curl);
}


public function send1()
{
    // Load the database library
    $this->load->database();

    // Fetch the parameters from the query string
    $mobile = '9182460870'; // Default mobile number, replace as needed
    $client_api_token = isset($_GET['client_api_token']) ? $_GET['client_api_token'] : null;
    $link = isset($_GET['link']) ? urldecode($_GET['link']) : 'https://s1x.in/7qSJxY'; // Default link if not provided

    // Set the expected API token
    $expected_api_token = "5df706ce-68fd-11ef-b1d4-02c8a5e042bd"; // Replace with your actual expected API token

    // Construct the payload according to the Pinbot WhatsApp API structure
    $data = array(
        "messaging_product" => "whatsapp",
        "recipient_type" => "individual",
        "to" => "91" . $mobile, // Recipient mobile number
        "type" => "template",
        "template" => array(
            "name" => "otp_0123", // Replace with your actual template name
            "language" => array(
                "code" => "en"
            ),
            "components" => array(
                array(
                    "type" => "body",
                    "parameters" => array(
                        array(
                            "type" => "text",
                            "text" => "8498451119" // OTP or text value to be sent
                        )
                    )
                ),
                array(
                    "type" => "button",
                    "sub_type" => "url", // Use the button subtype (e.g., URL or copy code)
                    "index" => "0", // Button index, starts from 0
                    "parameters" => array(
                        array(
                            "type" => "text",
                            "text" => "2345678678" // Send the link as the button payload
                        )
                    )
                )
            )
        )
    );

    $notification_client = 1; // Assuming always send notification

    // Check if the provided client API token matches the expected API token
    if ($client_api_token === $expected_api_token && $notification_client == 1) {
        // WhatsApp API CURL Call STARTS
        $api_endpoint = "https://partnersv1.pinbot.ai/v3/415660851631681/messages"; // API URL

        // Initialize CURL
        $ch = curl_init($api_endpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            "apikey: $expected_api_token", // Your WABA API Key
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, true); // Verbose output for debugging
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Disable SSL verification for testing
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification for testing
        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            $curl_error = curl_error($ch);
            error_log("CURL Error: " . $curl_error);
            echo json_encode(['status' => 'fail', 'message' => 'CURL Error: ' . $curl_error]);
        } else {
            echo $result; // Output the API response
        }

        curl_close($ch);
        // WhatsApp API CURL Call ENDS
    } else {
        echo json_encode(['status' => 'fail', 'message' => 'Invalid API token or notifications disabled!']);
    }
}

}