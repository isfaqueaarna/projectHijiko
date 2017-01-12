<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currencies extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mncu_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		if (isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('multinational_setting/currencies');

		}else{

			redirect('/login');

		}
	}


	public function add_currency()
	{
		if($this->input->post('mncuSName',TRUE)){
			
			$params = array(
				'mncuSName' => $this->input->post('mncuSName'),
				'mncuFName' => $this->input->post('mncuFName'),
				'mncuRate' => $this->input->post('mncuRate')
			);

			$mncu_duplicate = $this->Mncu_model->get_mncu_duplicate($params);

			if($mncu_duplicate == true){

				echo '{
					"status":"failed",
					"message":"Currency already exist"
				}';

			}else{

				$mncu_id = $this->Mncu_model->add_currency($params);

				if($mncu_id == 0){

					echo '{
						"status":"failed",
						"message":"Currency Failed"
					}';

				}else{

					echo '{
						"status":"success",
						"message":"Currency Added Successfully"
					}';

				}

			}

		}

	}


	public function update_currency()
	{
		if($this->input->post('mncuSName',TRUE)){
			$params = array(
				'mncuSName' => $this->input->post('mncuSName'),
				'mncuFName' => $this->input->post('mncuFName'),
				'mncuRate' => $this->input->post('mncuRate')
			);


			$mncu_id = $this->Mncu_model->update_currency($this->input->post('mncuId'), $params);

			echo '{
				"status":"success",
				"message":"Currency Updated Successfully"
			}';

		}

	}


	public function get_all_currencies()
	{
		header('Content-Type: application/json');
		$mnculist= $this->Mncu_model->get_all_mncu();

		$c=count($mnculist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'mncuId' => $mnculist[$i]['mncuId'],
				'mncuSName' => $mnculist[$i]['mncuSName'],
				'mncuFName' => $mnculist[$i]['mncuFName'],
				'mncuRate' => $mnculist[$i]['mncuRate'],
				'mncuStatus' => $mnculist[$i]['mncuStatus']
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
		if($this->input->post('mncuStatus',TRUE)){

			$params = array(
				'mncuStatus' => $this->input->post('mncuStatus')
			);

			$mncu_status_id = $this->Mncu_model->update_status($this->input->post('mncuId'), $params);

			if($mncu_status_id == true){

				echo '{
					"status":"success",
					"message":"Status Changed Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"Currency Status Change Failed"
				}';

			}

		}

	}

}