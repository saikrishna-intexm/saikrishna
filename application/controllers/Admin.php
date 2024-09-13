<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('admin_model');
	}
	
	public function index()
	{
		if ($this->session->userdata('session_user')) {
			redirect('admin/dashboard', 'refresh');
		} else {
			$this->load->view('admin/login');
		}  
	}
	
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	
	public function login_validation()
	{
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		
		if($email !="" && $password !=""){
			$data = (object) array('email' => $email, 'password' => sha1($password));
			$user = $this->admin_model->validateLogin($data);
			if(@$user->status == 'ACTIVE'){
				$this->session->set_userdata('session_user', $user); 
				echo json_encode(array('login_status' => "success"));
			} else {
				echo json_encode(array('login_status' => "fail"));
			}
		}
	}
	
	public function logout() {
		$this->session->unset_userdata('session_user');
		if ($this->session->userdata('session_user')) {
			redirect('admin/dashboard', 'refresh');
		} else {
			redirect('admin');
		}  
	}
	
	
	public function campaign()
	{
		$this->load->view('admin/campaign');
	}
	
	public function create_campaign()
	{
		$campaign_name = $this->input->post('campaign_name', TRUE);
		$priority_url_one = $this->input->post('priority_url_one', TRUE);
		$priority_url_two = $this->input->post('priority_url_two', TRUE);
		
		if(isset($campaign_name) && $campaign_name != ''){
			$data = array(
				'campaign_name' => $campaign_name, 
				'priority_url_one' => $priority_url_one,
				'priority_url_two' => $priority_url_two,
			);
			$result = $this->admin_model->createCampaign($data);
			echo json_encode($result);
		}
	}
	
	public function get_campaigns()
	{
		$result = $this->admin_model->getCampaigns();
		echo json_encode(array('data' => $result));
	}
	
	public function get_file_uploads_list()
	{
		$result = $this->admin_model->getFileUploadsList();
		echo json_encode(array('data' => $result));
	}
	
	public function insert_uniqString()
	{
		$length = 8;
		$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
		for ($x = 0; $x <= 1000000; $x++) {
		$data[] = array("uniqid" => substr(str_shuffle($str), 0, $length));
		}
		$result = $this->admin_model->insertUniqString($data);
		//echo json_encode($result);
	}
	
	public function file_upload()
	{
		$data['campaigns']= $result = $this->admin_model->getCampaigns();
		$this->load->view('admin/file_upload', $data);
	}
	
	public function downloadUploadedFile(){
		$file_upload_id = $this->input->post('file_upload_id', TRUE);
		$result = $this->admin_model->getFileUploadInfoById($file_upload_id);
		//print_r($result);exit;
		$fcpath = str_replace('\\', '/', FCPATH);
			if (file_exists($fcpath ."downloads/". $result->file_name)){
				unlink($fcpath ."downloads/". $result->file_name);
			}
	//$query = $this->db->query("SELECT CONCAT(mobile,',".preg_replace("(^https?://)", "", base_url())."', uniqid) FROM short_url WHERE campaign_id = ". $result->campaign_id ." AND file_upload_id = ". $result->campaign_id ." ORDER BY RAND() INTO OUTFILE '". $fcpath ."downloads/". $result->file_name."';");
	$sql ="SELECT CONCAT(mobile,',". preg_replace("(^https?://)", "", base_url()) ."', uniqid) FROM short_url WHERE campaign_id = ". $result->campaign_id ." AND file_upload_id = ". $result->campaign_id ." ORDER BY RAND()";
	//echo $sql; exit;
	shell_exec("mysql --user=root --password= --database=redirect -B -e '". $sql ."' > ". $fcpath ."downloads/". $result->file_name."");

		//$FileName = $fcpath ."downloads/". $result->file_name;
		//$this->load->helper('download');
		//force_download($FileName, NULL);
		
		$result = array(	
			'status' => 'success',
			'message' => 'File Created Successfully...', 
			'download_link' => ""
		);

		echo json_encode($result);
	}
	
	public function redirect_url(){
		$this->load->helper('url');
		$hitcount = $this->admin_model->getHitCount($this->uri->segment('1'));
		$campaign = $this->admin_model->getCampaignDetailsById($hitcount->campaign_id);
		//print_r($campaign);exit;
		if($hitcount->hit_count > 1){
			//echo $campaign->priority_url_two; exit;
			redirect($campaign->priority_url_two, 'refresh');
		} else {
			//echo $campaign->priority_url_one; exit;
			redirect($campaign->priority_url_one, 'refresh');
		}
	}
	
	//public function upload_customers(){
		
	//	$file = fopen('myCSVFile.csv', 'r');
	//	while (($line = fgetcsv($file)) !== FALSE) {
	//	//$line is an array of the csv elements
	//	print_r($line);
	//	}
	//	fclose($file);
	//}
	
	public function upload_customers(){
			
				shell_exec('chmod -R 777 /var/www/');

				$input = $this->input->post(NULL, TRUE);
				// print_r($input);
				$file_name = "".date('Ymd')."_".$input['file_name']."_".time();
				//Upload File Configuration
				$config['upload_path']          = 'uploads';
                $config['allowed_types']        = 'csv';
                $config['max_size']             = 500000;
				$config['file_name']			= $file_name;	
				
				$upload_data = $_FILES['myFile'];
				$file_name = $upload_data['name'];
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
                if ( ! $this->upload->do_upload("myFile"))
                {
                        $result = array(
							'status' => 'error', 
							'message' => $this->upload->display_errors()
						);
						echo json_encode($result);
                }
                else
                {
						$uploaded_data =  $this->upload->data();

                        $result = array(	
							'status' => 'success',
							'message' => 'You data uploaded successfully...', 
							'upload_data' => $uploaded_data
						);

						
						$data = $input;
						$data['file_name'] 	= $uploaded_data['raw_name']."".$uploaded_data['file_ext'];
						$data['created_at'] = date('Y-m-d H:i:s');

						$upload_info = $this->admin_model->createUploadDataInfo($data);
						if($upload_info['status'] = 'success') {
							$fcpath = str_replace('\\', '/', FCPATH);
						$file = fopen($fcpath."uploads/".$data['file_name'], 'r');
						$uniqIds = $this->admin_model->getUniqIds();
						$count = 0;
						while (($line = fgetcsv($file)) !== FALSE) {
							
							  //$line is an array of the csv elements
							  //print_r($line[0]);
							  $file_count = count($line);
							  $dump[] = array(
							  "mobile" => $line[0],
							  "uniqid" => $uniqIds[$count]->uniqid,
							  "campaign_id" => $data['campaign_id'],
							  "file_upload_id" => $upload_info['insert_id'],
							  "hit_count" => 0
							  );
							  
							  $count++;
							  //print_r($dump);
							  //exit;
							}
							fclose($file);
						}
						
						$result = $this->admin_model->campaignFileBatchUpload($dump);

					//if($upload_info['status'] = 'success') {
					//		$this->load->dbforge();
					//		$attributes = array('ENGINE' => 'InnoDB');
					//		$fields = array(
					//		'mobile' => array(
					//			 'type' => 'VARCHAR',
					//			 'constraint' => 12,
					//		)
					//		);
					//		$this->dbforge->add_key('mobile');
					//		$this->dbforge->add_field($fields);
					//		if($this->dbforge->create_table($data['table_name'], TRUE))
					//		{
					//		echo json_encode($result);	
							// $fcpath = str_replace('\\', '/', FCPATH);
							// $query = $this->db->query("LOAD DATA LOCAL INFILE '".$fcpath."uploads/".$data['file_name']."' INTO TABLE im_".$data['table_name']."");
					//		}
					//}

						
                }
	}
	
}
