<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupons extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Coup_model');		
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{

		if (isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('coupons/coupons');

		}else{

			redirect('/login');

		}
	}


	public function add_coupon()
	{
		if($this->input->post('coupName',TRUE)){
			$params = array(
				'coupName' => $this->input->post('coupName'),
				'coupCode' => $this->input->post('coupCode'),
				'coupDiscount' => $this->input->post('coupDiscount'),
				'coupEndDate' => $this->input->post('coupEndDate'),
				'coupEndTime' => $this->input->post('coupEndTime')
			);

			$coup_duplicate = $this->Coup_model->get_coupon_duplicate($params);

			if($coup_duplicate == true){

				echo '{
					"status":"failed",
					"message":"Coupon already exist"
				}';

			}else{

				$coup_id = $this->Coup_model->add_coupon($params);

				if($coup_id == 0){

					echo '{
						"status":"failed",
						"message":"Coupon Failed"
					}';

				}else{

					echo '{
						"status":"success",
						"message":"Coupon Added Successfully"
					}';
				}
			}
		}
	}


	public function update_coupon()
	{
		if($this->input->post('coupId',TRUE)){
			$params = array(
				'coupName' => $this->input->post('coupName'),
				'coupCode' => $this->input->post('coupCode'),
				'coupDiscount' => $this->input->post('coupDiscount'),
				'coupEndDate' => $this->input->post('coupEndDate'),
				'coupEndTime' => $this->input->post('coupEndTime')
			);


			$coup_id = $this->Coup_model->update_coupon($this->input->post('coupId'), $params);

			echo '{
				"status":"success",
				"message":"Coupon Updated Successfully"
			}';

		}

	}



	public function change_status()
	{
		if($this->input->post('coupStatus',TRUE)){

			$params = array(
				'coupStatus' => $this->input->post('coupStatus')
			);

			$coup_status_id = $this->Coup_model->update_status($this->input->post('coupId'), $params);

			if($coup_status_id == true){

				echo '{
					"status":"success",
					"message":"Status Changed Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"Coupon Status Change Failed"
				}';

			}

		}

	}





	public function get_all_coupons()
	{
		header('Content-Type: application/json');
		$couplist= $this->Coup_model->get_all_coupons();

		$c=count($couplist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'coupId' => $couplist[$i]['coupId'],
				'coupName' => $couplist[$i]['coupName'],
				'coupCode' => $couplist[$i]['coupCode'],
				'coupDiscount' => $couplist[$i]['coupDiscount'],
				'coupEndDate' => $couplist[$i]['coupEndDate'],
				'coupEndTime' => $couplist[$i]['coupEndTime'],
				'coupStatus' => $couplist[$i]['coupStatus']
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