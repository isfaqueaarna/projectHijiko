<?php
/* 
 * Generated by CRUDigniter v2.1 Beta 
 * www.crudigniter.com
 */
 
class Webc_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function update_image($id, $params)
    {
        $this->db->where('webcId',$id);
        $this->db->update('web_contents',$params);
    }

    public function get_image_name($params)
    {
        return $this->db->get_where('web_contents',$params)->row_array();
    }

    function get_all_web_contents()
    {
        return $this->db->get('web_contents')->result_array();
    }
    

}
