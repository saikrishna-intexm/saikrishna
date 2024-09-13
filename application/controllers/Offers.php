<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

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
		$this->load->model('offers_model');
	}
	
	public function index()
	{
		
	}
	
	public function page_one()
	{
		$this->load->view('offers/form');
	}
	
	public function page_two()
	{
		$this->load->view('offers/form_two');
	}
    
    public function page_three()
    {
        $this->load->view('offers/form_three');
    }
    
    public function page_kotak()
    {
        $this->load->view('offers/form_kotak');
    }
    
    public function page_au()
    {
        $this->load->view('offers/form_au');
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
			$result = $this->offers_model->createLead($data);
			echo json_encode($result);
		}
		
	}
	
	public function loan_application_two(){
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
			$result = $this->offers_model->createLeadTwo($data);
			echo json_encode($result);
		}
		
	}
    
    public function loan_application_three(){
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
            $result = $this->offers_model->createLeadThree($data);
            echo json_encode($result);
        }
        
    }
    
    
    public function loan_application_kotak(){
        
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
        
        if(isset($income) && $income != ''){
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
            $result = $this->offers_model->createLeadKotak($data);
            echo json_encode($result);
        }
        
    }
	
	public function page(){
		$offer_id = $this->input->get('offer_id', TRUE);
		$lead_id = $this->input->get('lead_id', TRUE);
		$data['offer'] = $this->offers_model->getOfferById($offer_id);
		$data['lead'] = $this->offers_model->getLeadById($lead_id);
		$this->load->view('offers/'. $data['offer']->offer_page .'', $data);
	}
    
    
	public function offer_page($page){
		$this->load->view('offers/'. $page);
	}
	
}
