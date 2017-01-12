<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Webc_model');		
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{

		if (isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('frontpage/frontpage');

		}else{

			redirect('/login');

		}
	}

	public function update_slider_image()
	{
		if($_FILES['file']['name']){

			$uploads_dir='uploads/webcontents/';

			$getparams = array(
				'webcId' => $this->input->post('webcId')
			);

			$oldWebcImageData= $this->Webc_model->get_image_name($getparams);

			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$messageName = basename($_FILES['file']["name"]);

	    	$imageName = uniqid("hjk");
	    	$imageFileName = $imageName.'.'.$ext;

	    	unlink($uploads_dir.$oldWebcImageData['webcImageName']);
	    	move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$imageFileName);

			$params = array(
				'webcImageName' => $imageFileName
			);
			
			$webc_id = $this->Webc_model->update_image($this->input->post('webcId'), $params);

			echo '{
				"status":"success",
				"message":"Slide Image 1 Updated Successfully"
			}';
		}
	}


	public function get_all_web_contents()
	{
		header('Content-Type: application/json');
		$webclist= $this->Webc_model->get_all_web_contents();

		$c=count($webclist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'webcId' => $webclist[$i]['webcId'],
				'webcName' => $webclist[$i]['webcName'],
				'webcImageName' => $webclist[$i]['webcImageName']
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