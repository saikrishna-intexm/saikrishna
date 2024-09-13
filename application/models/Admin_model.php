<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	public function validateLogin($data){
		$this->db->select('*');
        $this->db->where('email',$data->email);
        $this->db->where('password',$data->password);
        $result = $this->db->get('users')->row();
        return $result;
	}
	
	public function getCampaignDetailsById($id){
		$this->db->select('*');
        $this->db->where('campaign_id',$id);
        $result = $this->db->get('campaign_details')->row();
        return $result;
	}
	
	public function getFileUploadInfoById($id){
		$this->db->select('*');
        $this->db->where('file_upload_id',$id);
        $result = $this->db->get('file_upload')->row();
        return $result;
	}
	
	public function createCampaign($data){
		$this->db->insert('campaign_details', $data);
		if($this->db->affected_rows() > 0){
			$result = array( 'status' => 'success', 'insert_id' => $this->db->insert_id());
			} else {
			$result = array( 'status' => 'success', 'error' => $this->db->error());
			}
			echo "test";
		return $result;
	}
	
	public function getCampaigns(){
		$this->db->select('*');
		$this->db->from('campaign_details');
		//$this->db->join('categories', 'segments.category_id = categories.category_id', 'left');
		$result = $this->db->get()->result();
		return $result;
	}
	
	public function getFileUploadsList(){
		$this->db->select('*');
		$this->db->from('file_upload');
		//$this->db->join('categories', 'segments.category_id = categories.category_id', 'left');
		$result = $this->db->get()->result();
		return $result;
	}
	
	public function insertUniqString($data){
		$this->db->insert_batch('uniqids', $data); 
		return $result;
	}
	
	public function getUniqIds(){
		//$this->db->select('uniqid');
		//$this->db->from('uniqids');
		//$this->db->limit(300000, 0);
		//$result = $this->db->get()->result();
		//echo $this->db->last_query();
		//return $result;
		$sql="SELECT * FROM `uniqids` WHERE uniqid NOT IN (SELECT uniqid FROM short_url) LIMIT 250000";    
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	
	public function createCategory($data){
		$this->db->insert('categories', $data);
		if($this->db->affected_rows() > 0){
			$result = array( 'status' => 'success', 'insert_id' => $this->db->insert_id());
			} else {
			$result = array( 'status' => 'success', 'error' => $this->db->error());
			}
		return $result;
	}
	
	public function createUploadDataInfo($data){
		$this->db->insert('file_upload', $data);
		if($this->db->affected_rows() > 0){
		$result = array( 'status' => 'success', 'insert_id' => $this->db->insert_id());
		} else {
		$result = array( 'status' => 'success', 'error' => $this->db->error());
		}
		return $result;
	}
	
	public function campaignFileBatchUpload($data){
		$result = $this->db->insert_batch('short_url', $data); 
		return $result;
	}
	
	public function getHitCount($uId){
		$sql="UPDATE `short_url` SET `hit_count` = `hit_count` + 1 WHERE `short_url`.`uniqid` = '".$uId."'";
		$query = $this->db->query($sql);
		//$query->result();
		
		$this->db->select('*');
        $this->db->where('uniqid',$uId);
        $result = $this->db->get('short_url')->row();
        return $result;
	}
}