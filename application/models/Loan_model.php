<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loan_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	public function createLead($data){
	$this->db->insert('leads', $data);

	$this->db->select('*');
	$this->db->where('lead_id', $this->db->insert_id());
	$result = $this->db->get('leads')->row();
	return $result;
	}
	
	public function getOfferById($id){
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
	// public function getAllOfferOrderByPriority($series_list = NULL, $series = NULL){
	// 	$this->db->select('*');
	// 	if($series != NULL){
	// 		$this->db->where_in('offer_id', $series_list);
	// 		if($series == 1){
	// 			$this->db->order_by('FIELD ( offer_id, 11,1,3,9 )');
	// 		} else if($series == 2){
	// 			$this->db->order_by('FIELD ( offer_id, 3,10,8,13,9)');
	// 		} else {
	// 			$this->db->order_by("priority", "ASC");
	// 		}
			
	// 	} else{
	// 		$this->db->order_by("priority", "ASC");
	// 		$this->db->where('status','Y');
	// 	}

    //     $result = $this->db->get('loan_offers')->result();
    //     return $result;
	// }

	public function getAllOfferOrderByPriority($series_list = NULL, $mobile = NULL, $data){
		$this->db->select('*');
		$this->db->where('mobile', '91'.$mobile);
		$exist_gstin_check = $this->db->get('exist_gstin')->row();

		$this->db->select('*');
		if($series_list != NULL){
			$this->db->where_in('offer_id', $series_list);
			$order = sprintf('FIELD(offer_id, %s)', implode(', ', $series_list));
			$this->db->order_by($order); 
		} else{
			$this->db->where('status','Y');
		}

		if(isset($exist_gstin_check->mobile)){
			// $this->db->where('exist_creditcard_cust_check','Y');
			// $this->db->where('exist_creditcard_cust_check','N');
		} else {
			$this->db->where('exist_gstin_check','N');
		}

		if($mobile != NULL){
			// print_r($data);
			$this->db->where('offer_id NOT IN (SELECT rd_offer_id FROM leads WHERE mobile = '. $mobile .' AND created_at >= DATE_ADD(CURDATE(), INTERVAL -15 DAY) GROUP BY rd_offer_id HAVING COUNT(*) > 0)');
		}

		$this->db->where("(CASE WHEN income_check = 'Y' THEN income <= ". $data['income']."  ELSE 1 = 1 END)", NULL, FALSE);
		$this->db->where("(CASE WHEN emp_type_check = 'Y' THEN emp_type = '". $data['employee_type']."'  ELSE 1 = 1 END)", NULL, FALSE);
		// $this->db->where("(CASE WHEN exist_gstin_check = 'Y' THEN (SELECT COUNT(mobile) FROM exist_gstin WHERE mobile = '91".$mobile."') > 0  ELSE 1 = 1 END)", NULL, FALSE);
		
		$this->db->order_by("priority", "ASC");	
        $result = $this->db->get('loan_offers')->result();
		// print_r($result);
		// echo $this->db->last_query();exit;
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

	
    function __destruct(){
        $this->db->close();
    }
}
