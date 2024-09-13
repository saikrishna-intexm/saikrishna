<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fb extends CI_Controller {

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
		$this->load->model('camp_model');
	}
	
	public function index()
	{
		$this->load->view('loan_form');
	}

	public function multi()
	{
		if($this->input->get('d') == 100){
			redirect('https://trk.i1x.in/click?campaign_id=31&pub_id=2&source='.$this->input->get('utm_source') , 'refresh');
		} else if($this->input->get('d') == 101) {
			redirect('https://spectrum.gotrackier.com/click?campaign_id=231&pub_id=842&source='.$this->input->get('utm_source') , 'refresh');
		} else if($this->input->get('d') == 103) {
			redirect('https://edge.navifinserv.com/?naf_id=a27b3529-3ce3-4e9d-bea3-9ab1bed1e344', 'refresh');
		} else if($this->input->get('d') == 104) {
			redirect('https://trk.i1x.in/click?campaign_id=22&pub_id=2&source='.$this->input->get('utm_source') , 'refresh');
		} else if($this->input->get('d') == 105) {
			redirect('https://tracking.salesleaf.com/aff_c?offer_id=2913&aff_id=6441&url_id=38023', 'refresh');
		} else if($this->input->get('d') == 106) {
			redirect('https://s1.whistleloop.com/?linkid=13912&offerid=628&publisher_id=519&parentid=50&pub_name=Intexm Media&sub_id1='.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 100) {
			redirect('https://trk.i1x.in/click?campaign_id=22&pub_id=2&source='.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 101) {
			redirect('https://trk.i1x.in/click?campaign_id=95&pub_id=2&url_id=2&source='.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 102) {
			//LendingKart PL
			redirect('https://trk.i1x.in/click?campaign_id=113&pub_id=2&source='.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 103) {
			//FatakPay
			redirect('https://web.fatakpay.com/authentication/login?utm_source=72_WIJNQ&utm_medium=5743_'.$this->input->get('utm_source'), 'refresh');
		}else if($this->input->get('m') == 104) {
			//True Balance
			redirect('https://trk.i1x.in/click?campaign_id=91&pub_id=2&source='.$this->input->get('utm_source'), 'refresh');	
		}else if($this->input->get('m') == 105) {
			//Credit Vidya
			redirect('https://trk.i1x.in/click?campaign_id=74&pub_id=2&source='.$this->input->get('utm_source'), 'refresh');
		}else if($this->input->get('m') == 106) {
			//Navi
			redirect('https://edge.navifinserv.com/?naf_id=c826d8d8-85bc-428b-bb0e-03e14c03010a'.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 1001){
			//SmartCoin
			redirect('https://lowcredit.in/campaign/offerpage?offer_id=7&source='.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 1002){
			//TruBalance
			redirect('https://trk.i1x.in/click?campaign_id=423&pub_id=2&source='.$this->input->get('utm_source'), 'refresh');
		} else if($this->input->get('m') == 1003){
			//InCred
			redirect('https://trk.i1x.in/click?campaign_id=368&pub_id=2&url_id=5&source='.$this->input->get('utm_source'), 'refresh');
		}

		$this->load->view('fb/'.$this->uri->segment(3).'');
	}

	public function offer(){
        $offer_id = $this->input->get('offer_id', TRUE);
        
        $data['offer'] = $this->camp_model->getOfferById($offer_id);
		if(isset($_GET['lead_id'])){
			$lead_id = $this->input->get('lead_id', TRUE);
			$data['lead'] = $this->camp_model->getLeadById($lead_id);
		} else {
			$data['lead'] = (object) array();
			$data['lead']->utm_source =  $this->input->get('source');
		}

        $this->load->view('fb/offers/default', $data);
    }

	public function create_multi_offer(){
		$mstart = microtime(TRUE);
		$enable_errorlog = 0;

		if($enable_errorlog == 1){
		$start = microtime(TRUE);
		}
		//send selected data to the intexmengage for the notifications segmentation purpose
		// $data['token'] = $this->input->post('tokenValue');
		// $data['mobile_no'] = $this->input->post('mobile');
		// $data['product_id'] = '3';
		// $data['pincode'] = $this->input->post('pincode');
		// $data['income_type'] = $this->input->post('employee_type');
		// $data['income_range'] = $this->input->post('income', TRUE) * 12;
		// $data['agreed'] = $this->input->post('creditcard_using', TRUE);
		// $data['created_on'] = date("Y-m-d H:i:s");
		// $url = 'https://engage.intexmmedia.com//notifications/insertBasicLoanData';
		// $ch = curl_init($url);
		// // Set cURL options for the POST request
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// curl_setopt($ch, CURLOPT_POST, true);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3); 
		// curl_setopt($ch, CURLOPT_TIMEOUT, 3); //timeout in seconds
		// // Execute cURL session and get the response
		// $response = curl_exec($ch);
		// // Check for cURL errors
		// if (curl_errno($ch)) {
		// 	echo 'Curl error: ' . curl_error($ch);
		// }
		// curl_close($ch);

		$mobile = $this->input->post('mobile', TRUE);
		$employee_type = $this->input->post('employee_type', TRUE);
		$income = $this->input->post('income', TRUE);
		$pincode = $this->input->post('pincode', TRUE);
		$series = $this->input->post('series', TRUE);
		$utm_source = $this->input->post('utm_source', TRUE);
		$default = $this->input->post('default', TRUE);

		if($series == 1){
			$series_list = array(11,1,3,9);
		} else if($series == 2) {
			$series_list = array(9,6,3);
		} else {
			$series_list = 0;
		}
		

		//Facebook Pixel Status Stats Here
		$fb_pincode = $this->camp_model->checkPincodeStatus('pincode_facebook', $pincode);
		if(isset($fb_pincode->pincode)){
		$fb_pincode_status = 'Y';
		} else {
		$fb_pincode_status = 'N';
		}

		$check_cc_count = $this->camp_model->checkExistCustStatus('exist_creditcard', $mobile);
		// print_r($check_cc_count);
		if(isset($check_cc_count->card_count) && $check_cc_count->card_count >= 2 && $check_cc_count->card_count <= 5){
			
			$check_cc_count_status = 'Y';
			// print_r($check_cc_count_status);
		} else {
			$check_cc_count_status = 'N';
			// print_r($check_cc_count_status);	
		}

		// echo $check_cc_count_status;exit;

		if($income >= 50000 && $fb_pincode_status == 'Y' && $check_cc_count_status == 'Y'){
			$facebook_pixel_status = 'Y';
		} else {
			$facebook_pixel_status = 'N';
		}
		#Facebook Pixel Code Ends Here

		if($enable_errorlog == 1){
		$end = microtime(TRUE);
		$elapsed = $end - $start;
		error_log($elapsed."After Engage Request\n", 3, "/var/tmp/test-errors.log");
		}
		if(isset($mobile) && $mobile != ''){
			$data = array(
				'mobile' => $mobile,
				'facebook_pixel_status' => $facebook_pixel_status,
				'employee_type' => $employee_type,
				'income' => $income * 12,
				'pincode' => $pincode,
				'utm_source' => $utm_source,
				'rd_offer_id' => $default
			);
			if($enable_errorlog == 1){
			$start = microtime(TRUE);
			}
			if($series_list == 0) {
				$offers = $this->camp_model->getAllOfferOrderByPriority($series_list = NULL, $mobile, $data);
			} else {
				$offers = $this->camp_model->getAllOfferOrderByPriority($series_list, $mobile, $data);
			}
			if($enable_errorlog == 1){
			$end = microtime(TRUE);
			$elapsed = $end - $start;
			error_log($elapsed."After OffersCheck Request\n", 3, "/var/tmp/test-errors.log");
			}

			// echo "<pre>";
			// print_r($offers);exit;
			
			foreach($offers as $offer){
				
				//Pincode Checking
				if($offer->pincode_check == 'Y'){
					if($enable_errorlog == 1){
						$start = microtime(TRUE);
						}
					$pincode_check = $this->camp_model->checkPincodeStatus($offer->pincode_table, $pincode);
					if(isset($pincode_check->pincode)){
						$pincode_status = 'Y';
					} else {
						$pincode_status = 'N';
						continue;
					}
					if($enable_errorlog == 1){
					$end = microtime(TRUE);
				$elapsed = $end - $start;
			error_log($elapsed."(".$offer->pincode_table.")After PinCode Request\n", 3, "/var/tmp/test-errors.log");
					}
				} else {
					$pincode_status = 'Y';
				}
				if($enable_errorlog == 1){

			$start = microtime(TRUE);
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
				if($enable_errorlog == 1){
				$end = microtime(TRUE);
			$elapsed = $end - $start;
			error_log($elapsed."(".$offer->exist_cust_table.")After ExistCust Request\n", 3, "/var/tmp/test-errors.log");
				}
				
				// echo $pincode_status;
				// echo "<BR>";
				// echo $exist_cust_status;
				// echo "<BR>";
				// echo $income_status;
				// echo "<BR>";
				// echo $emp_type_status;
				// echo "<BR>";
				// echo $offer->offer_id;
				// exit;
				if($enable_errorlog == 1){
				$start = microtime(TRUE);
				}
				if($pincode_status == 'Y' && $exist_cust_status == 'N'){
					$data['rd_offer_id'] = $offer->offer_id;
					$data['utm_source'] = $utm_source;
					// print_r($data);exit;
					$lead = $this->camp_model->createLead($data);
					if(isset($lead->lead_id)){
					$lead->status = 'success';
					}
					if($enable_errorlog == 1){
					$end = microtime(TRUE);
					$elapsed = $end - $start;
					error_log($elapsed."After LeadGen Request\n--------------CAMP\n", 3, "/var/tmp/test-errors.log");
					}
					echo json_encode($lead);
					$mend = microtime(TRUE);
					$melapsed = $mend - $mstart;
					error_log(date("Y_m_d_h:i:sa")."_EXTIME_END_REQUEST_LOWCR:".round($melapsed,2)."\n", 3, "/var/tmp/".date("Y_m_d_ha_")."errors.log");
					return;
				} else {
					$data['rd_offer_id'] = $default;
				}

			}

			$data['utm_source'] = $utm_source;
			// print_r($data);exit;
			$lead = $this->camp_model->createLead($data);
			if(isset($lead->lead_id)){
				$lead->status = 'success';
			}
			if($enable_errorlog == 1){
			$end = microtime(TRUE);
			$elapsed = $end - $start;
			error_log($elapsed."After LeadGen Request\n------------CAMP\n", 3, "/var/tmp/test-errors.log");
			}
			// print_r($lead);exit;
			echo json_encode($lead);
			$mend = microtime(TRUE);
			$melapsed = $mend - $mstart;
			error_log(date("Y_m_d_h:i:sa")."_EXTIME_DEND_REQUEST_LOWCR:".round($melapsed,2)."\n", 3, "/var/tmp/".date("Y_m_d_ha_")."errors.log");
			return;
		}

	}
	
	

	public function test_offers() {
		$mobile = "9700066005";
		$data = array(
			'mobile' => $mobile,
			'employee_type' => 'SELF-EMPLOYEE',
			'income' => 300000,
			'pincode' => 530016,
			'utm_source' => "TEST_001",
			'rd_offer_id' => 1
		);

		// $series_list = array(1,4,5);

		$offers = $this->camp_model->getAllOfferOrderByPriority1($series_list = NULL, $mobile, $data);
		echo "<pre>";
		print_r($offers);exit;
	}
	
	
}
