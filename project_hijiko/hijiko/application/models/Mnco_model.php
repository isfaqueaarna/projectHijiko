<?php
 
class Mnco_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function get_all_mnco()
    {
    	$this->db->where('mncoStatus','active');
    	$query=$this->db->get('multinational_country');
        return $query->result_array();
    }
    

}
