<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_category extends CI_Controller {


    function __construct()
    {
        parent::__construct();	
        $this->load->model('Pcat_model');	
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		$this->load->view('include/dashboard_header');
		$this->load->view('product_setting/product_category');
	}

	public function add_category()
	{
		if($_FILES['file']['name']){
			$uploads_dir='uploads/webcontents/';

			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$messageName = basename($_FILES['file']["name"]);

	    	$imageName = uniqid("hjk");
	    	$imageFileName = $imageName.'.'.$ext;

			$params = array(
				'pcatName' => $this->input->post('pcatName'),
				'pcatDescription' => $this->input->post('pcatDescription'),
				'pcatImageName' => $imageFileName
			);

			$pcat_duplicate = $this->Pcat_model->get_pcat_duplicate($params);

			if($pcat_duplicate == true){

				echo '{
					"status":"failed",
					"message":"Category already exist"
				}';

			}else{

				move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$imageFileName);

				$pcat_id = $this->Pcat_model->add_category($params);

				if($pcat_id == 0){

					echo '{
						"status":"failed",
						"message":"Category Not Added"
					}';

				}else{

					echo '{
						"status":"success",
						"message":"Category Added Successfully"
					}';

				}

			}

		}

	}

	public function update_category()
	{
		if($this->input->post('pcatName',TRUE)){
			$params = array(
				'pcatName' => $this->input->post('pcatName'),
				'pcatDescription' => $this->input->post('pcatDescription')
			);


			$pcat_id = $this->Pcat_model->update_category($this->input->post('pcatId'), $params);
			echo '{
				"status":"success",
				"message":"Product Category Updated Successfully"
			}';
		}

	}


	public function update_icon()
	{
		if($_FILES['file']['name']){

			$uploads_dir='uploads/webcontents/';

			$getparams = array(
				'pcatId' => $this->input->post('pcatId')
			);

			$oldPcatImageData= $this->Pcat_model->get_image_name($getparams);

			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

			$imageName = uniqid("hjk");
	    	$imageFileName = $imageName.'.'.$ext;

	    	unlink($uploads_dir.$oldPcatImageData['pcatImageName']);
	    	move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$imageFileName);

			$params = array(
				'pcatImageName' => $imageFileName
			);

			$pcat_id = $this->Pcat_model->update_category($this->input->post('pcatId'), $params);
			echo '{
				"status":"success",
				"message":"Product Category Updated Successfully"
			}';
		}

	}


	public function get_all_categories()
	{
		header('Content-Type: application/json');
		$pcatlist= $this->Pcat_model->get_all_pcat();

		$c=count($pcatlist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'pcatId' => $pcatlist[$i]['pcatId'],
				'pcatName' => $pcatlist[$i]['pcatName'],
				'pcatImageName' => $pcatlist[$i]['pcatImageName'],
				'pcatImageLink' => base_url().'uploads/webcontents/'.$pcatlist[$i]['pcatImageName'],
				'pcatDescription' => $pcatlist[$i]['pcatDescription'],
				'pcatStatus' => $pcatlist[$i]['pcatStatus']
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
		if($this->input->post('pcatStatus',TRUE)){

			$params = array(
				'pcatStatus' => $this->input->post('pcatStatus')
			);

			$pcat_status_id = $this->Pcat_model->update_status($this->input->post('pcatId'), $params);

			if($pcat_status_id == true){

				echo '{
					"status":"success",
					"message":"Status Changed Successfully"
				}';

			}else{

				echo '{
					"status":"failed",
					"message":"Category Status Change Failed"
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