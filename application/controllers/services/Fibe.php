<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fibe extends CI_Controller
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
		$this->load->library('user_agent');
		if (!$this->agent->is_mobile()) {
			// redirect('https://www.google.com');
		}
		$this->load->model('loan_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function hmac_encrypt($allData, $key)
	{
		$hmac = hash_hmac("sha1", $allData, $key, TRUE);
		$signature = base64_encode($hmac);
		return $signature;
	}

	function cURL_request($jsonData, $url)
	{
		$checkSumValue = $this->hmac_encrypt($jsonData, CASHE_PARTNER_KEY);

		// Set up the cURL request
		$ch = curl_init(CASHE_PARTNER_URL . '' . $url);

		// Set the request method to POST
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Check-Sum: ' . $checkSumValue]);

		// Execute the request
		$response = curl_exec($ch);

		// Close the cURL handle
		curl_close($ch);

		// Do something with the response
		return $response;
	}


	public function checkDuplicateCustomerLead($mobile)
	{
		// print_r($_POST);
		$data = [
			'partner_name' => CASHE_PARTNER_NAME,
			'mobile_no' => $mobile
		];

		// print_r($data);exit;

		$jsonData = json_encode($data);
		$url = 'partner/checkDuplicateCustomerLead';
		$result = json_decode($this->cURL_request($jsonData, $url), true);
		// print_r($result); exit;
		echo json_encode($result);
	}

	public function getLoanApprovalDetails($data)
	{
		$jsonData = json_encode($data);
		$url = 'report/getLoanApprovalDetails';
		return $this->cURL_request($jsonData, $url);

	}

	public function create_customer($name, $mobile, $email)
	{

		$data = array(
			"partner_name" => CASHE_PARTNER_NAME,
			"Personal Information" => array(
				"First Name" => $name
			),
			"Contact Information" => array(
				"Mobile" => $mobile,
				"Email Id" => $email
			)
		);

		$jsonData = json_encode($data);
		$url = 'partner/create_customer';
		return $this->cURL_request($jsonData, $url);

	}

	public function customer_status()
	{

		$data = array(
			"partner_name" => CASHE_PARTNER_NAME,
			"partner_customer_id" => "5822544"
		);

		$jsonData = json_encode($data);
		$url = 'customer_status';
		print $this->cURL_request($jsonData, $url);

	}

	public function page()
	{
		$offer_id = $this->input->get('offer_id', TRUE);
		$lead_id = $this->input->get('lead_id', TRUE);
		$data['offer'] = $this->cashe_model->getOfferById($offer_id);
		$data['lead'] = $this->cashe_model->getLeadById($lead_id);
		$this->load->view('lp/' . $data['offer']->offer_page . '', $data);
	}

	public function fibe($lead_id)
	{
		$data['lead'] = $this->loan_model->getLeadById($lead_id);
		$data['offer'] = $this->loan_model->getOfferById($data['lead']->rd_offer_id);
		$data['api_response'] = json_decode($data['lead']->api_response);
		// echo "<pre>";print_r($data);exit;
		$this->load->view('loan/offer/fibe', $data);
	}

	public function fibe_fail($lead_id)
	{
		$data['lead'] = $this->loan_model->getLeadById($lead_id);
		$data['offer'] = $this->loan_model->getOfferById($data['lead']->rd_offer_id);
		// echo "<pre>";print_r($data);exit;
		$this->load->view('loan/offer/fibe_fail', $data);
	}

	public function fibe_sus($lead_id)
	{
		$data['lead'] = $this->loan_model->getLeadById($lead_id);
		$data['offer'] = $this->loan_model->getOfferById($data['lead']->rd_offer_id);
		$data['api_response'] = json_decode($data['lead']->api_response);
		// echo "<pre>";print_r($data);exit;
		$this->load->view('loan/offer/fibe_sus', $data);
	}

	public function fibe_exe($lead_id)
	{
		$data['lead'] = $this->loan_model->getLeadById($lead_id);
		$data['offer'] = $this->loan_model->getOfferById($data['lead']->rd_offer_id);
		$data['api_response'] = json_decode($data['lead']->api_response);
		// echo "<pre>";print_r($data);exit;
		$this->load->view('loan/offer/fibe_exe', $data);
	}


	public function application()
	{

		$this->load->view('loan/index');

	}

	public function offer_page($page)
	{
		$this->load->view('loan/' . $page);
	}

	public function echoname()
	{
		print_r($_POST);
	}

	public function generateTokenNew()
	{

		$data = array(
			"username" => FIBE_USERNAME,
			"password" => FIBE_PASSWORD,
			"applicationName" => "WEB"
		);

		// $url = "https://uatapi.earlysalary.com/token/esapi/generateTokenNew";
		$url = "https://api.socialworth.in/aggext-prod/esapi/generateTokenNew";
		$result = json_decode($this->fibecURL_request(json_encode($data), $url));
		if ($result->statusCode == 200) {
			return $result->token;
		} else {
			return $result;
		}	
	}

	function fibecURL_request($json, $url)
	{

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-type: application/json, charset=utf-8',
			'Content-Length: ' . strlen($json)
		)
		);
		$response = curl_exec($ch);
		if (curl_errno($ch)) {
			$result = 'Error: ' . curl_error($ch);
		} else {
			$result = $response;
		}
		curl_close($ch);
		return $result;
	}


	public function profile_ingestion($json)
	{

		$token = $this->generateTokenNew();
		// $ch = curl_init('https://uatapi.earlysalary.com/espiqa/profile-ingestion');	
		$ch = curl_init('https://api.socialworth.in/aggext-prod/esapi/profile-ingestion');

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-type: application/json, charset=utf-8',
			'Token: ' . $token,
			'Content-Length: ' . strlen($json)
		)
		);
		$response = curl_exec($ch);
		if (curl_errno($ch)) {
			$result = 'Error: ' . curl_error($ch);
		} else {
			$result = $response;
		}
		curl_close($ch);
		return $result;

	}

	public function create_loan_application()
	{
		// All Information

		$first_name = $this->input->post("first_name", TRUE);
		$last_name = $this->input->post("last_name", TRUE);
		$mobile = $this->input->post("mobile", TRUE);
		$employee_type = $this->input->post("employee_type", TRUE);
		$income = $this->input->post("income", TRUE);
		$pincode = $this->input->post("pincode", TRUE);
		$company = $this->input->post("company", TRUE);
		$pan_card_no = $this->input->post("pan_card_no", TRUE);
		$dob = $this->input->post("dob", TRUE);
		// $address_1 = $this->input->post("address_1", TRUE);
		// $address_2 = $this->input->post("address_2", TRUE);
		// $landmark = $this->input->post("locality", TRUE);
		// $marital_status = $this->input->post("marital_status", TRUE);
		// $city = $this->input->post("city", TRUE);
		// $office_city = $this->input->post("office_city", TRUE);
		$office_pincode = $this->input->post("office_pincode", TRUE);
		$profession = 'Others';
		// $office_address = $this->input->post("office_address", TRUE);
		$utm_source = $this->input->post('utm_source', TRUE);

		//Fibe Data
		if ($employee_type == 'SALARIED') {
			$profession = 'Salaried';
		} else if ($employee_type == 'SELF-EMPLOYEE') {
			$profession = 'Self-employed';
		} else {
			$profession = 'Student';
		}



		$data = array(
			"mobilenumber" => $mobile,
			"consent" => "true",
			"consentDatetime" => date('Y-m-d H=>i=>s'),
			"campaignsource" => "APP",
			"profile" => array(
				"firstname" => $first_name,
				"lastname" => $last_name,
				"dob" => $dob,
				"profession" => $profession,
				// "address1"=> $address_1,
				// "address2"=> $address_2,
				// "city"=> $city,
				// "landmark" => $landmark,
				"pincode" => $pincode,
				// "maritalstatus" => $marital_status,
				"subSource" => $utm_source
			),
			"finance" => array(
				"pan" => strtoupper($pan_card_no)
			),
			"employeedetails" => array(
				"employername" => $company,
				// "officeaddress" => $office_address,
				// "officeCity" => $office_city,
				"officepincode" => $pincode,
				"salary" => $income
			)
		);
		$fibe_result = $this->profile_ingestion(json_encode($data));
		print $fibe_result;
		return;
		// $lead_data['rd_offer_id'] = 1001;
		// $lead_data['utm_source'] = $utm_source;
		// $lead_data['redirection_url'] = $fibe_result->redirectionUrl;
		// $lead_data['api_response'] = json_encode($fibe_result);

		// $lead = $this->loan_model->createLead($lead_data);
		// // print_r($fibe_result);
		// // echo $fibe_result->redirectionUrl;
		// // echo $fibe_result->status; exit;
		// if($fibe_result->status == "Accepted"){

		// 			if(isset($lead->lead_id)){
		// 			$lead->status = 'success';
		// 			echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe/".$lead->lead_id));
		// 			return;
		// 			} else {
		// 				echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe_fail/".$lead->lead_id));
		// 				return;
		// 			}

		// } else if($fibe_result->status == "Suspended"){

		// 			if(isset($lead->lead_id)){
		// 			$lead->status = 'success';
		// 			echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe_sus/".$lead->lead_id));
		// 			return;
		// 			} else {
		// 				echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe_fail/".$lead->lead_id));
		// 				return;
		// 			}
		// }
		// } else if($fibe_result->status == "failure"){
		// $lead_data['rd_offer_id'] = 1001;
		// $lead_data['utm_source'] = $utm_source;
		// // $lead_data['redirection_url'] = $fibe_result->redirectionUrl;
		// $lead_data['api_response'] = json_encode($fibe_result);
		// $lead = $this->loan_model->createLead($lead_data);

		// if(isset($lead->lead_id)){
		// $lead->status = 'success';
		// echo json_encode(array('status'=>'success', 'url'=> base_url()."loan/fibe_exe/".$lead->lead_id));
		// return;
		// } else {
		// 	echo json_encode(array('status'=>'success', 'url'=> base_url()."loan/fibe_fail/".$lead->lead_id));
		// 	return;
		// }
		// } else {
		// $lead_data['rd_offer_id'] = 1001;
		// $lead_data['utm_source'] = $utm_source;
		// $lead_data['redirection_url'] = $fibe_result->redirectionUrl;
		// $lead_data['api_response'] = json_encode($fibe_result);
		// $lead = $this->loan_model->createLead($lead_data);
		// echo json_encode(array('status'=>'success', 'url'=> base_url()."loan/fibe_fail/".$lead->lead_id));
		// return;
		// }


		// //ALL OFFERS Data
		// if($employee_type == 1){
		// 	$profession = 'SALARIED';
		// } else if($employee_type == 2) {
		// 	$profession = 'SELF-EMPLOYEE';
		// } else {
		// 	$profession = NULL;
		// }
		// $data = array(
		// 	'mobile' => $mobile,
		// 	'email' => $email,
		// 	'name' => $first_name . "" . $last_name,
		// 	'employee_type' => $profession,
		// 	'income' => $income * 12,
		// 	'pincode' => $pincode,
		// 	'utm_source' => $utm_source,
		// 	'rd_offer_id' => $default
		// );

		// $offers = $this->loan_model->getAllOfferOrderByPriority($series_list = NULL, $mobile, $data);

		// // print_r($offers);exit;

		// foreach($offers as $offer){
		// 	// //Income Checking
		// if($offer->income_check == "Y"){

		// 	if($offer->income <= $income){
		// 		$income_status = 'Y';
		// 	} else {
		// 		$income_status = 'N';
		// 		continue;
		// 	}
		// } else {
		// 	$income_status = 'Y';
		// }

		// //Income Checking
		// if($offer->emp_type_check == "Y"){
		// 	if($offer->emp_type == $employee_type){
		// 		$emp_type_status = 'Y';
		// 	} else {
		// 		$emp_type_status = 'N';
		// 		continue;
		// 	}
		// } else {
		// 	$emp_type_status = 'Y';
		// }

		//Pincode Checking
		// 	if($offer->pincode_check == "Y"){
		// 		$pincode_check = $this->loan_model->checkPincodeStatus($offer->pincode_table, $pincode);
		// 		if(isset($pincode_check->pincode)){
		// 			$pincode_status = 'Y';
		// 		} else {
		// 			$pincode_status = 'N';
		// 			continue;
		// 		}
		// 	} else {
		// 		$pincode_status = 'Y';
		// 	}

		// 	//Existing Customenr Checking
		// 	if($offer->exist_cust_check == 'Y'){
		// 		$exist_cust_check = $this->loan_model->checkExistCustStatus($offer->exist_cust_table, $mobile);
		// 		if(isset($exist_cust_check->mobile)){
		// 			$exist_cust_status = 'Y';
		// 			continue;
		// 		} else {
		// 			$exist_cust_status = 'N';	
		// 		}
		// 	} else {
		// 		$exist_cust_status = 'N';
		// 	}

		// 	// echo $pincode_status;
		// 	// echo "<BR>";
		// 	// echo $exist_cust_status;
		// 	// echo "<BR>";
		// 	// echo $income_status;
		// 	// echo "<BR>";
		// 	// echo $emp_type_status;
		// 	// echo "<BR>";
		// 	// echo $offer->offer_id;
		// 	// exit;

		// 	if($pincode_status == 'Y' && $exist_cust_status == 'N'){
		// 		$data['rd_offer_id'] = $offer->offer_id;
		// 		$data['utm_source'] = $utm_source;
		// 		$lead = $this->loan_model->createLead($data);
		// 		if(isset($lead->lead_id)){
		// 		$lead->status = 'our_page';
		// 		}
		// 		echo json_encode($lead);
		// 		return;
		// 	} else {
		// 		$data['rd_offer_id'] = $default;
		// 	}

		// }

		// $data['utm_source'] = $utm_source;
		// $lead = $this->loan_model->createLead($data);
		// if(isset($lead->lead_id)){
		// 	$lead->status = 'our_page';
		// }
		// // print_r($lead);exit;
		// echo json_encode($lead);
		// return;

	}



  
  
  


}
