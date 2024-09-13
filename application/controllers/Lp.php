<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lp extends CI_Controller {

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
			// redirect('https://www.google.com');
		}
		$this->load->model('lp_model');
	}
	
	public function index()
	{
        $this->load->view('lp/form');
	}
    
	public function form()
	{
//        $back_url_status = $this->session->userdata('back_url_status');
//        if($back_url_status == 'enable'){
//            $back_url = $this->lp_model->getBackURL();
//            //redirect($back_url);
//        }
		$this->load->view('lp/form_'.$this->uri->segment(3));
	}
	
	public function loan_application(){
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
			$result = $this->lp_model->createLead($data, $pone, $ptwo);
			echo json_encode($result);
		}
		
	}
	
	public function page(){
        $this->session->set_userdata('back_url_status', 'enable');
		$offer_id = $this->input->get('offer_id', TRUE);
		$lead_id = $this->input->get('lead_id', TRUE);
		$data['offer'] = $this->lp_model->getOfferById($offer_id);
		$data['lead'] = $this->lp_model->getLeadById($lead_id);
		$this->load->view('lp/'. $data['offer']->offer_page .'', $data);
	}
    
    public function threeloanform()
    {
        $this->load->view('page_two/form_'.$this->uri->segment(3));
    }
    
    public function threeloan_application(){
       
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
        $pthree = $this->input->post('pthree', TRUE);
        if(date("dmy") == '271123'){
        $pthree = 26;
        }

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
            $result = $this->lp_model->createThreeLead($data, $pone, $ptwo, $pthree);
            echo json_encode($result);
        }
    }
    
    public function threeloanpage(){
        $offer_id = $this->input->get('offer_id', TRUE);
        $lead_id = $this->input->get('lead_id', TRUE);
        $data['offer'] = $this->lp_model->getOfferById($offer_id);
        $data['lead'] = $this->lp_model->getLeadById($lead_id);
        $this->load->view('page_two/'. $data['offer']->offer_page .'', $data);
    }
    
    public function otp_page($page){
        $this->load->view('otp_page/'. $page);
    }
    
    public function otp_verification() {
    
        $data['mobile'] = $this->input->post('mobile', TRUE);
        $data['utm_source'] = $this->input->post('source', TRUE);
        $data['otp'] = $this->input->post('otp', TRUE);
        $result = $this->lp_model->checkCreditScoreOTP($data);
        
        if(isset($result->verification_status) AND $result->verification_status == 'N'){
        $OTPdata['mobile'] = $data['mobile'];
        $OTPdata['verification_status'] = 'Y';
        $OTPdata['utm_source'] = $data['utm_source'];
        $this->lp_model->updateCreditScoreOTPStatus($OTPdata);
        $result = array( 'status' => 'success', 'verification_status' => $result->verification_status, 'utm_source' => $data['utm_source']);
           
        } else {
        $result = array( 'status' => 'error', 'verification_status' => @$result->verification_status);
        }
        
        print json_encode($result);
    }
    
    
	public function offer_page($page){
		$this->load->view('lp/'. $page);
	}
	
	public function info(){
		phpinfo();
	}
    
    public function fire(){
        $this->load->view('fire/index');
    }
	
}
