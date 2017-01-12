<?php
 
class Mnlang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function get_all_mnlang()
    {
    	$this->db->where('mnlangStatus','active');
    	$query=$this->db->get('multinational_language');
        return $query->result_array();
    }
    

}
