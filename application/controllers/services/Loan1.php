<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loan1 extends CI_Controller
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
        $params = (array) json_decode(file_get_contents('php://input'), TRUE);

        $api_key = $params['api_key'];
        if ($api_key != 'S5a9P3067Q') {
            exit;
        }

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

        // If a source code is found, use it; otherwise, use the default value
        $source = $result ? $result->utm_source : 'H001';

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

            if ($series_list == 0) {
                $offers = $this->camp_model->getAllOfferOrderByPriority($series_list = NULL, $mobile, $data);
            } else {
                $offers = $this->camp_model->getAllOfferOrderByPriority($series_list, $mobile, $data);
            }

            foreach ($offers as $offer) {

                // Pincode Checking
                if ($offer->pincode_check == "Y") {
                    $pincode_check = $this->camp_model->checkPincodeStatus($offer->pincode_table, $pincode);
                    if (isset($pincode_check->pincode)) {
                        $pincode_status = 'Y';
                    } else {
                        $pincode_status = 'N';
                        continue;
                    }
                } else {
                    $pincode_status = 'Y';
                }

                // Existing Customer Checking
                if ($offer->exist_cust_check == 'Y') {
                    $exist_cust_check = $this->camp_model->checkExistCustStatus($offer->exist_cust_table, $mobile);
                    if (isset($exist_cust_check->mobile)) {
                        $exist_cust_status = 'Y';
                        continue;
                    } else {
                        $exist_cust_status = 'N';
                    }
                } else {
                    $exist_cust_status = 'N';
                }

                if ($pincode_status == 'Y' && $exist_cust_status == 'N') {
                    $data['rd_offer_id'] = $offer->offer_id;
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
                        echo json_encode($response_data);
                    }

                    return;
                } else {
                    $data['rd_offer_id'] = $default;
                }
            }

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
                echo json_encode($response_data);
            }
            return;
        }
    }

    public function send()
    {
        // Load the database library
        $this->load->database();

        // Fetch the parameters from the query string
        $mobile = isset($_GET['mobile']) ? $_GET['mobile'] : null;
        $client_api_token = isset($_GET['client_api_token']) ? $_GET['client_api_token'] : null;
        $link = isset($_GET['link']) ? urldecode($_GET['link']) : 'https://s1x.in/7qSJxY'; // Default link if not provided

        // Check if mobile and client_api_token are provided
        // Validate mobile number
        if (!$mobile || !preg_match('/^[6-9]\d{9}$/', $mobile)) {
            $response = array('status' => 'fail', 'message' => 'Invalid or missing mobile number!');
            $status = 'N';
        } else if (!$client_api_token) {
            $response = array('status' => 'fail', 'message' => 'Client API token not provided!');
            $status = 'N';
        } else {
            $expected_api_token = "1c00e193-219a-11ef-a50c-02c8a5e042bd"; // Replace with your actual expected API token

            // Adjust the payload to match the structure in the provided cURL request
            $payload = [
                [
                    "from" => "919154905277",
                    "to" => "91" . $mobile,
                    "type" => "template",
                    "message" => [
                        "templateid" => "108692",
                        "placeholders" => [
                            $link
                        ],
                        "buttons" => [
                            [
                                "index" => 1,
                                "type" => "visit_website",
                                "placeholder" => "STOP"
                            ]
                        ]
                    ]
                ],
                [
                    "from" => "919154905277",
                    "to" => "91" . $mobile,
                    "type" => "template",
                    "message" => [
                        "templateid" => "108692",
                        "buttons" => [
                            [
                                "index" => 1,
                                "type" => "visit_website",
                                "placeholder" => "STOP"
                            ]
                        ]
                    ]
                ]
            ];

            $notification_client = 1; // Assuming always send notification

            if ($client_api_token === $expected_api_token && $notification_client == 1) {
                // WhatsApp API CURL Call STARTS
                $api_endpoint = 'https://sendbulkv1.pinbot.ai/v1/wamessage/bulkmsgsendapi';

                $ch = curl_init($api_endpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    "apikey: $expected_api_token"
                ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_VERBOSE, true); // Verbose output for debugging
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Disable SSL verification for testing
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification for testing
                $result = curl_exec($ch);

                if (curl_errno($ch)) {
                    $curl_error = curl_error($ch);
                    // Log or handle the CURL error
                    error_log("CURL Error: " . $curl_error);
                    $response = array('status' => 'fail', 'message' => 'CURL Error: ' . $curl_error);
                    $status = 'N';
                } else {
                    $response = json_decode($result, true); // Convert API response to array

                    // Check if the API response contains a 'code' field and if it equals 200
                    if (isset($response['code']) && $response['code'] === 200) {
                        $status = 'Y';
                    } else {
                        $status = 'N';
                        error_log("Unexpected API Response: " . json_encode($response));
                    }
                }

                curl_close($ch);
                // WhatsApp API CURL Call ENDS

                // Log the payload and response
                error_log("Payload: " . json_encode($payload));
                error_log("Response: " . $result);
            } else {
                $response = array('status' => 'fail', "message" => "Invalid API token or notifications disabled!");
                $status = 'N';
            }
        }

        // Save the mobile number, response, and status to the database only if status is 'Y'
        if ($status === 'Y') {
            $data = array(
                'mobile' => $mobile,
                'response' => json_encode($response),
                'status' => $status
            );
            $this->db->insert('ivr_msg_responses', $data);

            // Add the link to the response
            $response['link'] = $link;
        }

        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    }

   
    public function send1()
    {
        // Load the database library
        $this->load->database();
    
        // Fetch the parameters from the query string
        $mobile = isset($_GET['mobile']) ? $_GET['mobile'] : null;
        $client_api_token = isset($_GET['client_api_token']) ? $_GET['client_api_token'] : null;
        $link =  'https://s1x.in/7qSJxY'; // Default link if not provided
    
        // Check if mobile and client_api_token are provided
        // Validate mobile number
        if (!$mobile || !preg_match('/^[6-9]\d{9}$/', $mobile)) {
            $response = array('status' => 'fail', 'message' => 'Invalid or missing mobile number!');
            $status = 'N';
        } else if (!$client_api_token) {
            $response = array('status' => 'fail', 'message' => 'Client API token not provided!');
            $status = 'N';
        } else {
            $expected_api_token = "5df706ce-68fd-11ef-b1d4-02c8a5e042bd"; // Replace with your actual expected API token
    
            // Construct the payload according to the WhatsApp API structure
            $payload = [
                "messaging_product" => "whatsapp",
                "recipient_type" => "individual",
                "to" => "91" . $mobile,
                "type" => "template",
                "template" => [
                    "language" => [
                        "code" => "en"
                    ],
                    "name" => "instant_template_1", // Replace with your actual template name
                    "components" => [
                        [
                            "type" => "body",
                            "parameters" => [
                                [
                                    "type" => "text",
                                    "text" => $link
                                ]
                            ]
                        ]
                    ]
                ]
            ];
    
            $notification_client = 1; // Assuming always send notification
    
            if ($client_api_token === $expected_api_token && $notification_client == 1) {
                // WhatsApp API CURL Call STARTS
                $api_endpoint = "https://partnersv1.pinbot.ai/v3/437129872808909/messages";
                
                $ch = curl_init($api_endpoint);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
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
                    // Log or handle the CURL error
                    error_log("CURL Error: " . $curl_error);
                    $response = array('status' => 'fail', 'message' => 'CURL Error: ' . $curl_error);
                    $status = 'N';
                } else {
                    $response = json_decode($result, true); // Convert API response to array
    
                    // Check if the API response contains a 'code' field and if it equals 200
                    if (isset($response['code']) && $response['code'] === 200) {
                        $status = 'Y';
                    } else {
                        $status = 'N';
                        error_log("Unexpected API Response: " . json_encode($response));
                    }
                }
    
                curl_close($ch);
                // WhatsApp API CURL Call ENDS
    
                // Log the payload and response
                error_log("Payload: " . json_encode($payload));
                error_log("Response: " . $result);
            } else {
                $response = array('status' => 'fail', "message" => "Invalid API token or notifications disabled!");
                $status = 'N';
            }
        }
        if ($status === 'Y') {
            $data = array(
                'mobile' => $mobile,
                'response' => json_encode($response),
                'status' => $status
            );
            $this->db->insert('ivr_msg_responses', $data);

            // Add the link to the response
            $response['link'] = $link;
        }

    
        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    


    
    


}
