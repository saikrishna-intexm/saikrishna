<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('website/index');
	}
	
	public function terms_and_conditions(){
		$this->load->view('website/tc');
	}

	public function privacy(){
		$this->load->view('website/privacy');
	}
	public function success()
	{
		$this->load->view('campaign/success/index');
	}

	public function insertBasicLoanData()
	{
		$data['token'] = $this->input->post('token');
		$data['mobile_no'] = $this->input->post('mobile_no');
		$data['product_id'] = $this->input->post('product_id');
		$data['pincode'] = $this->input->post('pincode');
		$data['income_type'] = $this->input->post('income_type');
		$data['income_range'] = $this->input->post('income_range');
		$data['agreed'] = $this->input->post('agreed');
		$data['created_on'] = date("Y-m-d H:i:s");

        $url = 'https://engage.intexmmedia.com//notifications/insertBasicLoanData';
		$ch = curl_init($url);

		// Set cURL options for the POST request
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// Set a timeout for the cURL request (in seconds)
		curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Adjust the timeout value as needed
		// Execute cURL session and get the response
		$response = curl_exec($ch);

		// Check for cURL errors
		if (curl_errno($ch)) {
		    echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);
		if ($response !== false) {
		    echo $response;
		} else {
		    // Handle the case where the request timed out
		    echo 'Request timed out';
		}
	}

	
}
