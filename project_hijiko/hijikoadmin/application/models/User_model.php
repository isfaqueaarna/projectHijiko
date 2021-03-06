<?php
/* 
 * Generated by CRUDigniter v2.1 Beta 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function add_user_signup($params)
    {
    	$this->db->insert('users',$params);
    	return $this->db->insert_id();
    }

    public function get_user_login($params)
    {
        $this->db->where('userTypeId',$params['userTypeId']);
	  	$this->db->where('userEmail',$params['userEmail']);
	  	$this->db->where('userPassword',$params['userPassword']);
	  	$query=$this->db->get('users');
	 	$c=$query->num_rows(); 
	  	if($c>0){
	  		return true;
	  	}
	  	else{
			return false; 
		}
    }

    public function get_user_duplicate($params)
    {
        $this->db->where('userEmail',$params['userEmail']);
        $query=$this->db->get('users');
        $c=$query->num_rows(); 
        if($c>0){
            return true;
        }
        else{
            return false; 
        }
    }

    public function get_user_data($params)
    {
        return $this->db->get_where('users',$params)->row_array();
    }

    function get_all_user()
    {

        $this->db->where('userTypeId',2);
        $query=$this->db->get('users');
        return $query->result_array();
    }

    function get_all_vendors()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('vendor_details', 'vendor_details.vdUserId = users.userId');
        $this->db->where('userVendorStep','submitted');
        $query=$this->db->get();
        return $query->result_array();
    }

    function update_status($id, $params)
    {
        $this->db->where('userId',$id);
        $this->db->update('users',$params);

        if($this->db->affected_rows() == '1'){
            return true;
        }else{
            return false;
        }
    }
    

}
