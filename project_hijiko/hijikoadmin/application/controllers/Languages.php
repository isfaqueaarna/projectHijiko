<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Languages extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mnlang_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		if (isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('multinational_setting/languages');

		}else{

			redirect('/login');

		}
	}

	public function add_language()
	{
		if($this->input->post('mnlangSName',TRUE)){
			$params = array(
				'mnlangSName' => $this->input->post('mnlangSName'),
				'mnlangFName' => $this->input->post('mnlangFName')
			);

			$mnlang_duplicate = $this->Mnlang_model->get_mnlang_duplicate($params);

			if($mnlang_duplicate == true){

				echo '{
					"status":"failed",
					"message":"Language already exist"
				}';

			}else{

				$mnlang_id = $this->Mnlang_model->add_language($params);

				if($mnlang_id == 0){

					echo '{
						"status":"failed",
						"message":"Language Not Added"
					}';

				}else{

					echo '{
						"status":"success",
						"message":"Language Added Successfully"
					}';

				}

			}

		}

	}

	public function update_language()
	{
		if($this->input->post('mnlangSName',TRUE)){
			$params = array(
				'mnlangSName' => $this->input->post('mnlangSName'),
				'mnlangFName' => $this->input->post('mnlangFName')
			);


			$mnlang_id = $this->Mnlang_model->update_language($this->input->post('mnlangId'), $params);
			echo '{
				"status":"success",
				"message":"Language Updated Successfully"
			}';
		}

	}


	public function get_all_languages()
	{
		header('Content-Type: application/json');
		$mnlanglist= $this->Mnlang_model->get_all_mnlang();

		$c=count($mnlanglist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'mnlangId' => $mnlanglist[$i]['mnlangId'],
				'mnlangSName' => $mnlanglist[$i]['mnlangSName'],
				'mnlangFName' => $mnlanglist[$i]['mnlangFName'],
				'mnlangStatus' => $mnlanglist[$i]['mnlangStatus']
			);

			$json = json_encode($data);

			echo $json;

            if($c-1!=$i){
				echo ",";
			}

		}

		echo ']';

	}


	public function change_status()
	{
		if($this->input->post('mnlangStatus',TRUE)){

			$params = array(
				'mnlangStatus' => $this->input->post('mnlangStatus')
			);

			$mnlang_status_id = $this->Mnlang_model->update_status($this->input->post('mnlangId'), $params);

			if($mnlang_status_id == true){

				echo '{
					"status":"success",
					"message":"Status Changed Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"Language Status Change Failed"
				}';

			}

		}

	}


}