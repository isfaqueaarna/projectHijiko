<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mnco_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		if (isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('multinational_setting/locations');

		}else{

			redirect('/login');

		}
	}

	public function add_country()
	{
		if($this->input->post('mncoSName',TRUE)){
			$params = array(
				'mncoSName' => $this->input->post('mncoSName'),
				'mncoFName' => $this->input->post('mncoFName')
			);

			$mnco_duplicate = $this->Mnco_model->get_mnco_duplicate($params);

			if($mnco_duplicate == true){

				echo '{
					"status":"failed",
					"message":"Country already exist"
				}';

			}else{

				$mnco_id = $this->Mnco_model->add_country($params);

				if($mnco_id == 0){

					echo '{
						"status":"failed",
						"message":"Country Not Added"
					}';

				}else{

					echo '{
						"status":"success",
						"message":"Country Added Successfully"
					}';

				}

			}

		}

	}

	public function update_country()
	{
		if($this->input->post('mncoSName',TRUE)){
			$params = array(
				'mncoSName' => $this->input->post('mncoSName'),
				'mncoFName' => $this->input->post('mncoFName')
			);


			$mnco_id = $this->Mnco_model->update_country($this->input->post('mncoId'), $params);
			echo '{
				"status":"success",
				"message":"Country Updated Successfully"
			}';
		}

	}


	public function get_all_countries()
	{
		header('Content-Type: application/json');
		$mncolist= $this->Mnco_model->get_all_mnco();

		$c=count($mncolist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'mncoId' => $mncolist[$i]['mncoId'],
				'mncoSName' => $mncolist[$i]['mncoSName'],
				'mncoFName' => $mncolist[$i]['mncoFName'],
				'mncoStatus' => $mncolist[$i]['mncoStatus']
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
		if($this->input->post('mncoStatus',TRUE)){

			$params = array(
				'mncoStatus' => $this->input->post('mncoStatus')
			);

			$mnco_status_id = $this->Mnco_model->update_status($this->input->post('mncoId'), $params);

			if($mnco_status_id == true){

				echo '{
					"status":"success",
					"message":"Status Changed Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"Country Status Change Failed"
				}';

			}

		}

	}


}