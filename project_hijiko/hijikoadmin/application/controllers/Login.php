<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();	
        $this->load->model('User_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		$this->load->view('include/session_header');
		$this->load->view('session/login');
	}

	public function user_login()
	{
		if($this->input->post('userEmail',TRUE)){
			$params = array(
				'userTypeId' => $this->input->post('userTypeId'),
				'userEmail' => $this->input->post('userEmail'),
				'userPassword' => $this->input->post('userPassword')
			);

			$login_result = $this->User_model->get_user_login($params);

			if($login_result == true){

				$userdata = $this->User_model->get_user_data($params);

				$session_data = array(
					'userId' => $userdata['userId'],
					'userFullName' => $userdata['userFullName'],
					'userEmail' => $userdata['userEmail']		
				);

				$this->session->set_userdata('logged_user', $session_data);

				echo '{
					"status":"success",
					"message":"Login Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"Login Failed"
				}';

			}
		}

	}
}