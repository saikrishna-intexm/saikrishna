<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Campaign_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	public function createLead($data, $pone, $ptwo){
	$this->db->insert('leads', $data);

	$this->db->select('*');
	$this->db->where('lead_id', $this->db->insert_id());
	$lead = $this->db->get('leads')->row();

	$this->db->select('*');
	$this->db->where('offer_id', $pone);
	$offer = $this->db->get('offers')->row();

	if(isset($offer->offer_id)){

		if($offer->pincode_check == 'Y') {
			$this->db->select('*');
			$this->db->where('pincode', $lead->pincode);
			$this->db->where('offer_id', $offer->offer_id);
			$pincode = $this->db->get('pincodes')->row();

			if(isset($pincode->pincode_id) AND $pincode->pincode_id > 0){
					$offer_id = $offer->offer_id;
				} else {
					$offer_id = $ptwo;
				}
			} else {
				$offer_id = $offer->offer_id;
			}

			} else {
				$offer_id = $ptwo;
	}

	if($offer_id > 0){

		$this->db->set('rd_offer_id', $offer_id, FALSE);
		$this->db->where('lead_id', $lead->lead_id);
		$this->db->update('leads');

	$result = array( 'status' => 'success', 'offer_id' => $offer_id, 'lead_id' => $lead->lead_id);
	} else {
	$result = array( 'status' => 'error', 'error' => $this->db->error());
	}

	return $result;
	}
	
	public function createMultiLead($data, $pone, $ptwo){
	$this->db->insert('leads', $data);

	$this->db->select('*');
	$this->db->where('lead_id', $this->db->insert_id());
	$lead = $this->db->get('leads')->row();

	$this->db->select('*');
	$this->db->where('offer_id', $pone);
	$offer = $this->db->get('offers')->row();
	
	if($data['income'] < 300000){
		$ptwo = 7;
	} 

	if(isset($offer->offer_id)){

		if($offer->pincode_check == 'Y') {
			$this->db->select('*');
			$this->db->where('pincode', $lead->pincode);
			$this->db->where('offer_id', $offer->offer_id);
			$pincode = $this->db->get('pincodes')->row();

			if(isset($pincode->pincode_id) AND $pincode->pincode_id > 0){
					$offer_id = $offer->offer_id;
				} else {
					$offer_id = $ptwo;
				}
			} else {
				$offer_id = $offer->offer_id;
			}

			} else {
				$offer_id = $ptwo;
	}

	if(1==1){

		$this->db->set('rd_offer_id', $offer_id, FALSE);
		$this->db->where('lead_id', $lead->lead_id);
		$this->db->update('leads');

	$result = array( 'status' => 'success', 'offer_id' => $offer_id, 'lead_id' => $lead->lead_id);
	} else {
	$result = array( 'status' => 'error', 'error' => $this->db->error());
	}

	return $result;
	}
	
	public function getOfferById($id){
		$this->db->select('*');
        $this->db->where('offer_id',$id);
        $result = $this->db->get('offers')->row();
        return $result;
	}

	public function getLoanOfferById($id){
		$this->db->select('*');
        $this->db->where('offer_id',$id);
        $result = $this->db->get('loan_offers')->row();
        return $result;
	}
	
	public function getLeadById($id){
		$this->db->select('*');
        $this->db->where('lead_id',$id);
        $result = $this->db->get('leads')->row();
        return $result;
	}

	public function getAllOfferOrderByPriority($series_list = NULL, $series = NULL, $mobile = NULL){
		$this->db->select('*');
		if($series != NULL){
			$this->db->where_in('offer_id', $series_list);
			$order = sprintf('FIELD(offer_id, %s)', implode(', ', $series_list));
			$this->db->order_by($order); 
			
		} else{
			if($mobile != NULL){
				// $this->db->where('offer_id NOT IN (SELECT rd_offer_id FROM leads WHERE mobile = '. $mobile .' AND created_at >= DATE_ADD(CURDATE(), INTERVAL -10 DAY))');
				$this->db->where('offer_id NOT IN (SELECT rd_offer_id FROM leads WHERE mobile = '. $mobile .' AND created_at >= DATE_ADD(CURDATE(), INTERVAL -15 DAY) GROUP BY rd_offer_id HAVING COUNT(*) > 0)');
			}
			$this->db->where('status','Y');
			$this->db->order_by("priority", "ASC");	
		}

        $result = $this->db->get('loan_offers')->result();
        return $result;
	}
	

	public function checkPincodeStatus($table_name, $pincode){
		$this->db->select('*');
        $this->db->where("pincode", $pincode);
        $result = $this->db->get($table_name)->row();
        return $result;
	}

	public function checkExistCustStatus($table_name, $mobile){
		$this->db->select('*');
        $this->db->where("mobile", "91".$mobile);
        $result = $this->db->get($table_name)->row();
        return $result;
	}
}
