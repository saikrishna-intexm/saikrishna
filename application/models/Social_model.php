<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Social_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	public function createLead($data, $pone, $ptwo){

		$this->db->insert('leads', $data);
		
		$this->db->select('*');
        $this->db->where('lead_id', $this->db->insert_id());
        $lead = $this->db->get('leads')->row();
		
		$this->db->select('*');
//        $this->db->where("min_age < TIMESTAMPDIFF(YEAR,'". $lead->year ."-01-01', NOW())");
//        $this->db->where("max_age > TIMESTAMPDIFF(YEAR,'". $lead->year ."-01-01', NOW())");
        $this->db->where('min_income <=', $lead->income);
        $this->db->where('offer_id', $pone);
        $offer = $this->db->get('offers')->row();
//		echo $this->db->last_query(); exit;
		
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
		$this->db->update('leads'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
			$result = array( 'status' => 'success', 'offer_id' => $offer_id, 'lead_id' => $lead->lead_id);
			} else {
			$result = array( 'status' => 'error', 'error' => $this->db->error());
			}
			
		return $result;
	
	
	}
    
    public function createThreeLead($data, $pone, $ptwo, $pthree){
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
                        $this->db->select('*');
                        $this->db->where('min_income <=', $lead->income);
                        $this->db->where('offer_id', $ptwo);
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
                                        $offer_id = $pthree;
                                    }
                            } else {
                                        $offer_id = $offer->offer_id;
                            }
                            
                        } else {
                            $offer_id = $pthree;
                        }
                    }
            }
        } else {
            $offer_id = $pthree;
        }
        
        if($offer_id > 0){
			$this->db->set('rd_offer_id', $offer_id, FALSE);
		$this->db->where('lead_id', $lead->lead_id);
		$this->db->update('leads'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
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
	
	public function getLeadById($id){
		$this->db->select('*');
        $this->db->where('lead_id',$id);
        $result = $this->db->get('leads')->row();
        return $result;
	}
    
    public function checkCreditScoreOTP($data){
        $this->db->select('*');
        $this->db->where('otp',$data['otp']);
        $this->db->where('mobile',$data['mobile']);
        $result = $this->db->get('temp_creditscore')->row();
		//echo $this->db->last_query(); exit;
        return $result;
    }
    
    public function updateCreditScoreOTPStatus($data){
        $this->db->where('mobile',$data['mobile']);
        $result = $this->db->update('temp_creditscore',$data);
        return $result;
    }
}
