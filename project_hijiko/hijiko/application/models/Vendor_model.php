<?php
 
class Vendor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function add_vendor_details($params)
    {
    	$this->db->insert('vendor_details',$params);
    	return $this->db->insert_id();
    }

    public function get_vendor_step1($params)
    {
        return $this->db->get_where('vendor_details',$params)->row_array();
    }

    public function update_vendor_step($id, $params)
    {
        $this->db->where('vdUserId',$id);
        $this->db->update('vendor_details',$params);
    }

    public function get_image_name($params)
    {
        return $this->db->get_where('vendor_details',$params)->row_array();
    }

    public function verify_email($params)
    {
        $this->db->where('vdUserId',$params['vdUserId']);
        $this->db->where('vdEmailOTP',$params['vdEmailOTP']);
        $query=$this->db->get('vendor_details');
        $c=$query->num_rows(); 
        if($c>0){
            return true;
        }
        else{
            return false; 
        }
    }


    public function verify_mobile($params)
    {
        $this->db->where('vdUserId',$params['vdUserId']);
        $this->db->where('vdMobileOTP',$params['vdMobileOTP']);
        $query=$this->db->get('vendor_details');
        $c=$query->num_rows(); 
        if($c>0){
            return true;
        }
        else{
            return false; 
        }
    }


    

}
