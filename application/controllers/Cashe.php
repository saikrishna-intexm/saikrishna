<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashe extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		$this->load->library('user_agent');
		if (!$this->agent->is_mobile()) {
			redirect('https://www.google.com');
		}
		$this->load->model('cashe_model');
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
	
	function cURL_request($jsonData, $url){
		$checkSumValue = $this->hmac_encrypt($jsonData, CASHE_PARTNER_KEY);

		// Set up the cURL request
		$ch = curl_init(CASHE_PARTNER_URL.''.$url);

		// Set the request method to POST
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json','Check-Sum: '.$checkSumValue]);

		// Execute the request
		$response = curl_exec($ch);

		// Close the cURL handle
		curl_close($ch);

		// Do something with the response
		return $response;
	}

	
	public function checkDuplicateCustomerLead(){
		$data = [
		  'partner_name' => CASHE_PARTNER_NAME,
         'mobile_no' => $this->input->post('mobile_no', TRUE)
		];

		$jsonData = json_encode($data);
		$url = 'checkDuplicateCustomerLead';
		$result = json_decode($this->cURL_request($jsonData, $url), true);
        echo $result['payLoad'];
	}

	public function getLoanApprovalDetails(){
		$data = [
			"partner_name" 	=> CASHE_PARTNER_NAME,
			"pan" 			=> "CFIPP1346D",
			"mobileNo"		=> "9666082245",
			"name"			=> "Sateesh Kumar Pothanapalli",
			"addressLine1"	=> "Pallisaradhi Village and Post",
			"locality"		=> "Srikakulam",
			"pinCode"		=> "532222",
			"gender"		=> "M",
			"salary"		=> "7500000",
			"state"			=> "ANDHRA PRADESH",
			"city"			=> "Srikakulam",
			"dob"			=> "1987-12-22 00:00:00",
			"employmentType"		=> 1,
			"salaryReceivedType"	=> 3,
			"emailId"				=> "sateesh@gmail.com",
			"companyName"			=> "Intexm Media Private Limited",
			"loanAmount"			=> "500000"
		];

		$jsonData = json_encode($data);
		$url = 'getLoanApprovalDetails';
		print $this->cURL_request($jsonData, $url);
		
	}
	
	public function create_customer(){
		
		$data = array(
		"partner_name" => CASHE_PARTNER_NAME,
		"Personal Information" => array(
			"First Name" => "Vinod Tamada"
			),
		"Contact Information" => array(
			"Mobile"=> "9908817147",
			"Email Id" => "vinod.tamada@gmail.com"
			)
		);
		
		$jsonData = json_encode($data);
		$url = 'create_customer';
		print $this->cURL_request($jsonData, $url);
		
	}	
	
	public function customer_status(){
		
		$data = array(
		"partner_name" => CASHE_PARTNER_NAME,
		"partner_customer_id" => "5822544"
		);
		
		$jsonData = json_encode($data);
		$url = 'customer_status';
		print $this->cURL_request($jsonData, $url);
		
	}
	
	public function create_loan_application(){
		$name = $this->input->post('name', TRUE);
		$mobile = $this->input->post('mobile', TRUE);
		$email = $this->input->post('email', TRUE);
		$year = $this->input->post('year', TRUE);
		$employee_type = $this->input->post('employee_type', TRUE);
		$income = $this->input->post('income', TRUE);
		$pincode = $this->input->post('pincode', TRUE);
		$utm_source = $this->input->post('utm_source', TRUE);
		$utm_medium = $this->input->post('utm_medium', TRUE);
		$utm_publisher_id = $this->input->post('utm_publisher_id', TRUE);
		$utm_subid_1 = $this->input->post('utm_subid_1', TRUE);
        $utm_subid_2 = $this->input->post('utm_subid_2', TRUE);
        $pone = $this->input->post('pone', TRUE);
		$ptwo = $this->input->post('ptwo', TRUE);

		
		if(isset($mobile) && $mobile != ''){
			$data = array(
				'name' => $name, 
				'mobile' => $mobile,
				'email' => $email,
				'year' => $year, 
				'employee_type' => $employee_type,
				'income' => $income,
				'pincode' => $pincode,
				'utm_source' => $utm_source,
				'utm_medium' => $utm_medium,
				'utm_publisher_id' => $utm_publisher_id,
				'utm_subid_1' => $utm_subid_1,
				'utm_subid_2' => $utm_subid_2
			);
			
			$cdata = [
				'partner_name' => CASHE_PARTNER_NAME,
				'mobile_no' => $mobile
			];
			
			$jsonData = json_encode($cdata);
			$url = 'checkDuplicateCustomerLead';
			$result = json_decode($this->cURL_request($jsonData, $url), true);
			
			if($result['payLoad'] == 'NO') {
				$data['cashe'] = 'Y';
			} else {
				$data['cashe'] = 'N';
			}
			
			$result = $this->cashe_model->createLead($data, $pone, $ptwo);
			
			if($result['offer_id'] == 12){
				$data = array(
					"partner_name" => CASHE_PARTNER_NAME,
					"Personal Information" => array(
					"First Name" => $name
				),
					"Contact Information" => array(
					"Mobile"=> $mobile,
					"Email Id" => $email
					)
				);

				$jsonData = json_encode($data);
				$url = 'create_customer';
				$cresult = json_decode($this->cURL_request($jsonData, $url));
				$ccdata['payLoad'] = $cresult->payLoad;
				$ccdata['lead_id'] = $result['lead_id'];
				$ccdata['result'] = json_encode($cresult);
				$ccresult = $this->cashe_model->createCashELead($ccdata);
			}
			
			echo json_encode($result);
		}
		
	}
	
	public function page(){
		$offer_id = $this->input->get('offer_id', TRUE);
		$lead_id = $this->input->get('lead_id', TRUE);
		$data['offer'] = $this->cashe_model->getOfferById($offer_id);
		$data['lead'] = $this->cashe_model->getLeadById($lead_id);
		$this->load->view('lp/'. $data['offer']->offer_page .'', $data);
	}
	
	
	public function loan_application(){
		
		$this->load->view('cashe/index');
		
	}
	
	public function offer_page($page){
		$this->load->view('lp/'. $page);
	}
}
