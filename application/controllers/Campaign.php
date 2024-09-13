<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

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
		$this->load->model('campaign_model');
		$this->load->model('camp_model');
	}
	
	public function index()
	{
		$this->load->view('loan_form');
	}
	
	public function form()
	{
		$this->load->view('campaign/t'.$this->uri->segment(3).'/f'.$this->uri->segment(4));
	}
	
	public function process()
	{
		$this->load->view('campaign/t'.$this->uri->segment(3).'/process');
	}
	
	public function create_loan(){
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
			
			$result = $this->campaign_model->createLead($data, $pone, $ptwo);
			echo json_encode($result);
		}
		
	}
	
	public function create_multi_loan(){
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
			
			$result = $this->campaign_model->createMultiLead($data, $pone, $ptwo);
			echo json_encode($result);
		}
		
	}
	
	public function page(){
		$offer_id = $this->input->get('offer_id', TRUE);
		$lead_id = $this->input->get('lead_id', TRUE);
		$data['offer'] = $this->campaign_model->getOfferById($offer_id);
		$data['lead'] = $this->campaign_model->getLeadById($lead_id);
		if($offer_id == 0){
			$this->load->view('campaign/t'.$this->uri->segment(3).'/multi', $data);
		} else {
			$this->load->view('campaign/t'.$this->uri->segment(3).'/'. $data['offer']->offer_page .'', $data);
		}
	}
    
    public function offer(){
        $data['lead'] = (object) array('name' => "User");
        $this->load->view('campaign/t'.$this->uri->segment(3).'/'. $this->uri->segment(4) .'', $data);
    }

	public function multi()
	{
		$this->load->view('campaign/'.$this->uri->segment(3).'');
	}

	public function offerpage(){
        $offer_id = $this->input->get('offer_id', TRUE);
        
        $data['offer'] = $this->campaign_model->getLoanOfferById($offer_id);
		if(isset($_GET['lead_id'])){
			$lead_id = $this->input->get('lead_id', TRUE);
			$data['lead'] = $this->campaign_model->getLeadById($lead_id);
		} else {
			$data['lead'] = (object) array();
			$data['lead']->utm_source =  $this->input->get('source');
		}

        $this->load->view('campaign/offerpage/'. $data['offer']->offer_page .'', $data);
    }

	public function create_multi_offer(){

		//send selected data to the intexmengage for the notifications segmentation purpose
		$data['token'] = $this->input->post('tokenValue');
		$data['mobile_no'] = $this->input->post('mobile');
		$data['product_id'] = '3';
		$data['pincode'] = $this->input->post('pincode');
		$data['income_type'] = $this->input->post('employee_type');
		$data['income_range'] = $this->input->post('income', TRUE);
		$data['agreed'] = $this->input->post('creditcard_using', TRUE);
		$data['created_on'] = date("Y-m-d H:i:s");
        $url = 'https://engage.intexmmedia.com//notifications/insertBasicLoanData';
		$ch = curl_init($url);
		// Set cURL options for the POST request
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Adjust the timeout value as needed
		// Execute cURL session and get the response
		$response = curl_exec($ch);

		// Check for cURL errors
		if (curl_errno($ch)) {
		    echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);
		if ($response !== false) {
		    // echo $response;
		} else {
		    // Handle the case where the request timed out
		    // echo 'Request timed out';
		}


		$mobile = $this->input->post('mobile', TRUE);
		$employee_type = $this->input->post('employee_type', TRUE);
		$income = $this->input->post('income', TRUE);
		$pincode = $this->input->post('pincode', TRUE);
		$series = $this->input->post('series', TRUE);
		$utm_source = $this->input->post('utm_source', TRUE);
		$default = $this->input->post('default', TRUE);

		if($series == 1){
			$series_list = array(26,32,35,44,31);
		} else if($series == 2) {
			$series_list = array(9,6,3);
		} else {
			$series_list = 0;
		}

		if(isset($mobile) && $mobile != ''){
			$data = array(
				'mobile' => $mobile,
				'employee_type' => $employee_type,
				'income' => $income,
				'pincode' => $pincode,
				'utm_source' => $utm_source,
				'rd_offer_id' => $default
			);
			
			if($series_list == 0) {
				$offers = $this->campaign_model->getAllOfferOrderByPriority();
			} else {
				$offers = $this->campaign_model->getAllOfferOrderByPriority($series_list, $series);
			}
			
			foreach($offers as $offer){
				//Income Checking
				if($offer->income_check == "Y"){
					
					if($offer->income <= $income){
						$income_status = 'Y';
					} else {
						$income_status = 'N';
						continue;
					}
				} else {
					$income_status = 'Y';
				}

				//Income Checking
				if($offer->emp_type_check == "Y"){
					if($offer->emp_type == $employee_type){
						$emp_type_status = 'Y';
					} else {
						$emp_type_status = 'N';
						continue;
					}
				} else {
					$emp_type_status = 'Y';
				}
				
				//Pincode Checking
				if($offer->pincode_check == "Y"){
					$pincode_check = $this->camp_model->checkPincodeStatus($offer->pincode_table, $pincode);
					if(isset($pincode_check->pincode)){
						$pincode_status = 'Y';
					} else {
						$pincode_status = 'N';
						continue;
					}
				} else {
					$pincode_status = 'Y';
				}

				//Existing Customenr Checking
				if($offer->exist_cust_check == 'Y'){
					$exist_cust_check = $this->camp_model->checkExistCustStatus($offer->exist_cust_table, $mobile);
					if(isset($exist_cust_check->mobile)){
						$exist_cust_status = 'Y';
						continue;
					} else {
						$exist_cust_status = 'N';	
					}
				} else {
					$exist_cust_status = 'N';
				}
				
				

				if($pincode_status == 'Y' && $exist_cust_status == 'N' && $income_status == 'Y' && $emp_type_status == 'Y'){
					$data['rd_offer_id'] = $offer->offer_id;
					$data['utm_source'] = $utm_source;
					$lead = $this->camp_model->createLead($data);
					if(isset($lead->lead_id)){
					$lead->status = 'success';
					}
					// print_r($lead);exit;
					echo json_encode($lead);
					return;
				} else {
					$data['rd_offer_id'] = $default;
				}

			}

			$data['utm_source'] = $utm_source;
			$lead = $this->camp_model->createLead($data);
			if(isset($lead->lead_id)){
				$lead->status = 'success';
			}
			// print_r($lead);exit;
			echo json_encode($lead);
			return;
		}

	}

	public function load_multi_offer(){
		// exit('VVVV');
		$series = $this->input->get('series', TRUE);
		$utm_source = $this->input->get('utm_source', TRUE);
		if($series == 1) {
			$series_list = array(45,65,18,73);
		} else if($series == 2) {
			$series_list = array(30,52);
		} else if($series == 3) {
			$series_list = array(3,35,59,40);
		} else if($series == 4) {
			$series_list = array(66,18,40,5);
		} else if($series == 5) {
			$series_list = array(40,35,59,5);
		} else if($series == 6) {
			$series_list = array(3,59,35,57);
		} else if($series == 7) {
			$series_list = array(18,44);
		} else if($series == 8) {
			$series_list = array(71,64); 
		} else if($series == 9) {
			$series_list = array(66,5,60,18);
		} else if($series == 10) {
			$series_list = array(45,5,18,30,35,52,84);
		} else if($series == 11) {
			$series_list = array(45,18,86,16);
		} else if($series == 12) {
			$series_list = array(35,30);
		} else if($series == 13) {
			$series_list = array(12,32);
		} else if($series == 14) {
			$series_list = array(64,35);
		} else if($series == 15) {
			$series_list = array(86);
		} else if($series == 16) {
			$series_list = array(87);
		} else {
			$series_list = 0;
		}

		if($series_list == 0) {
			$offers = $this->campaign_model->getAllOfferOrderByPriority();
		} else {
			$offers = $this->campaign_model->getAllOfferOrderByPriority($series_list, $series);
		}

		$data['series'] = $series;
		$data['utm_source'] = $utm_source;
		$data['offers'] = $offers;

		$this->load->view('campaign/multioffer/success', $data);
	}
	public function load_multi_offer1(){

		$this->load->view('campaign/multioffer/success1');
	}
	public function load_multi_offer2(){

		$this->load->view('campaign/multioffer/success2');
	}
	public function load_multi_offer3(){

		$this->load->view('campaign/multioffer/success3');
	}
	public function load_multi_offer4(){

		$this->load->view('campaign/multioffer/success4');
	}
	public function load_multi_offer5(){

		$this->load->view('campaign/multioffer/success5');
	}
	
}
