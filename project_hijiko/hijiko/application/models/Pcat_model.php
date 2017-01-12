<?php
 
class Pcat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_pcat()
    {
    	$this->db->where('pcatStatus','active');
    	$query=$this->db->get('product_categories');
        return $query->result_array();
    }

    

}