<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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
		$this->load->view('session/signup');
	}

	public function user_signup()
	{
		if($this->input->post('userTypeId',TRUE)){
			$params = array(
				'userTypeId' => $this->input->post('userTypeId'),
				'userTypeName' => $this->input->post('userTypeName'),
				'userFullName' => $this->input->post('userFullName'),
				'userEmail' => $this->input->post('userEmail'),
				'userPassword' => $this->input->post('userPassword')
			);

			$user_duplicate = $this->User_model->get_user_duplicate($params);

			if($user_duplicate == true){

				echo '{
					"status":"failed",
					"message":"Email already exist"
				}';

			}else{

				$user_id = $this->User_model->add_user_signup($params);

				if($user_id == 0){

					echo '{
						"status":"failed",
						"message":"Signup Failed"
					}';

				}else{

					echo '{
						"status":"success",
						"message":"Successfully Signup"
					}';

				}

			}

		}

	}
}
