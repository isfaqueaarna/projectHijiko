<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		if(isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('general/users');

		}else{

			redirect('/login');

		}
	}


	public function change_status()
	{
		if($this->input->post('userStatus',TRUE)){

			$params = array(
				'userStatus' => $this->input->post('userStatus')
			);

			$user_status_id = $this->User_model->update_status($this->input->post('userId'), $params);

			if($user_status_id == true){

				echo '{
					"status":"success",
					"message":"Status Changed Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"User Status Change Failed"
				}';

			}

		}

	}


	public function get_all_users()
	{
		header('Content-Type: application/json');
		$userlist= $this->User_model->get_all_user();

		$c=count($userlist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'userId' => $userlist[$i]['userId'],
				'userFirstName' => $userlist[$i]['userFirstName'],
				'userLastName' => $userlist[$i]['userLastName'],
				'userEmail' => $userlist[$i]['userEmail'],
				'userStatus' => $userlist[$i]['userStatus']
			);

			$json = json_encode($data);

			echo $json;

            if($c-1!=$i){
				echo ",";
			}

		}
		echo ']';
	}


}