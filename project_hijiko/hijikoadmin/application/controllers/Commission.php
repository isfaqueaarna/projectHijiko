<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commission extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Com_model');		
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{

		if (isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('commission/commission');

		}else{

			redirect('/login');

		}
	}

	public function get_hijiko_commission()
	{
		header('Content-Type: application/json');
		$comCode = 'HIJIKOCOMMISSION';
		$params = array(
			'comCode' => $comCode
		);
		$comdata= $this->Com_model->get_commission($params);

		$data = array(
			'comId' => $comdata['comId'],
			'comCode' => $comdata['comCode'],
			'comName' => $comdata['comName'],
			'comPercentage' => $comdata['comPercentage'],
			'comDescription' => $comdata['comDescription']
		);

		$json = json_encode($data);

		echo $json;
	}


	public function update_commission()
	{
		if($this->input->post('comName',TRUE)){

			$params = array(
				'comName' => $this->input->post('comName'),
				'comPercentage' => $this->input->post('comPercentage'),
				'comDescription' => $this->input->post('comDescription')
			);
			
			$com_id = $this->Com_model->update_commission($this->input->post('comId'), $params);

			echo '{
				"status":"success",
				"message":"Commission Updated Successfully"
			}';
		}
	}

}