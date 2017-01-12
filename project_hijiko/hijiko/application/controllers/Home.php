<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();	
        $this->load->model('User_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home/home');
		$this->load->view('include/footer');
	}


	public function user_signup()
	{
		if($this->input->post('userTypeId',TRUE)){
			$params = array(
				'userTypeId' => $this->input->post('userTypeId'),
				'userTypeName' => $this->input->post('userTypeName'),
				'userFirstName' => $this->input->post('userFirstName'),
				'userLastName' => $this->input->post('userLastName'),
				'userEmail' => $this->input->post('userEmail'),
				'userPassword' => $this->input->post('userPassword'),
				'userDob' => $this->input->post('userBirthDate').'/'.$this->input->post('userBirthMonth').'/'.$this->input->post('userBirthYear'),
				'userSubscribe' => $this->input->post('userSubscribe')
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

				$params_active = array(
					'userTypeId' => $this->input->post('userTypeId'),
					'userEmail' => $this->input->post('userEmail'),
					'userPassword' => $this->input->post('userPassword'),
					'userStatus' => 'active'
				);

				$user_active = $this->User_model->get_user_active($params_active);

				if($user_active == true){

					$userdata = $this->User_model->get_user_data($params);

					$session_data = array(
						'userId' => $userdata['userId'],
						'userFirstName' => $userdata['userFirstName'],
						'userLastName' => $userdata['userLastName'],
						'userEmail' => $userdata['userEmail'],
						'userIsVendor' => $userdata['userIsVendor'],
						'userVendorStep' => $userdata['userVendorStep']		
					);

					$this->session->set_userdata('user_logged', $session_data);

					echo '{
						"status":"success",
						"message":"Login Successfully"
					}';


				}else{

					echo '{
						"status":"failed",
						"message":"Your Account is Blocked, Please Contact Hi Jiko"
					}';


				}

			}else{

				echo '{
					"status":"failed",
					"message":"Email or Password is wrong"
				}';


			}
		}

	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}