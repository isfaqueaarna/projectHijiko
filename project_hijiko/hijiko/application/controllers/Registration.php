<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    function __construct()
    {
        parent::__construct();	
        $this->load->model('User_model');
        $this->load->model('Vendor_model');	
        $this->load->model('Mnlang_model');
        $this->load->model('Pcat_model');
        $this->load->model('Mnco_model');
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		if($this->session->userdata['user_logged']['userVendorStep'] == 'step1'){
			redirect('registration/step2');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'step2'){
			redirect('registration/step3');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'submitted'){
			redirect('registration/pending');
		}else{
			redirect('registration/step1');
		}
		
	}

	public function step1()
	{
		if($this->session->userdata['user_logged']['userVendorStep'] == 'step1'){
			redirect('registration/step2');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'step2'){
			redirect('registration/step3');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'submitted'){
			redirect('registration/pending');
		}else{
			$this->load->view('include/header');
			$this->load->view('registration/step1');
			$this->load->view('include/footer');
		}

	}

	public function step1edit()
	{
		if($this->session->userdata['user_logged']['userVendorStep'] == 'submitted'){
			redirect('registration/pending');
		}else{
			$this->load->view('include/header');
			$this->load->view('registration/step1edit');
			$this->load->view('include/footer');
		}
		
	}

	public function step2edit()
	{
		if($this->session->userdata['user_logged']['userVendorStep'] == 'submitted'){
			redirect('registration/pending');
		}else{
			$this->load->view('include/header');
			$this->load->view('registration/step2edit');
			$this->load->view('include/footer');
		}

	}

	public function step2()
	{
		if($this->session->userdata['user_logged']['userVendorStep'] == 'step1'){
			$this->load->view('include/header');
			$this->load->view('registration/step2');
			$this->load->view('include/footer');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'step2'){
			redirect('registration/step3');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'step3'){
			redirect('registration/pending');
		}else{
			redirect('registration/step1');
		}

	}


	public function step3()
	{
		if($this->session->userdata['user_logged']['userVendorStep'] == 'step1'){
			redirect('registration/step2');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'step2'){
			$this->load->view('include/header');
			$this->load->view('registration/step3');
			$this->load->view('include/footer');
		}else if($this->session->userdata['user_logged']['userVendorStep'] == 'step3'){
			redirect('registration/pending');
		}else{
			redirect('registration/step1');
		}
	}


	public function pending()
	{
		if($this->session->userdata['user_logged']['userIsVendor'] == 'yes'){
			redirect('/');
		}else{
			$this->load->view('include/header');
			$this->load->view('registration/pending');
			$this->load->view('include/footer');
		}
	}



	public function add_step1()
	{
		if($this->input->post('vdLocation',TRUE)){
			$params = array(
				'vdUserId' => $this->session->userdata['user_logged']['userId'],
				'vdLocation' => $this->input->post('vdLocation'),
				'vdLocationLat' => $this->input->post('vdLocationLat'),
				'vdLocationLong' => $this->input->post('vdLocationLong'),
				'vdPLanguage' => $this->input->post('vdPLanguage'),
				'vdSLanguages' => $this->input->post('vdSLanguages'),
				'vdPCategories' => $this->input->post('vdPCategories'),
				'vdCountry' => $this->input->post('vdCountry'),
				'vdState' => $this->input->post('vdState'),
				'vdCity' => $this->input->post('vdCity'),
				'vdStreetAddress' => $this->input->post('vdStreetAddress'),
				'vdWebsites' => $this->input->post('vdWebsite'),
				'vdZIPCode' => $this->input->post('vdZIPCode')
			);

			$params_update = array(
				'userVendorStep' => 'step1'
			);


			$vendor_id = $this->Vendor_model->add_vendor_details($params);

			if($vendor_id == 0){
				echo '{
					"status":"failed",
					"message":"Vendor Add Failed"
				}';
			}else{

				$user_id = $this->User_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params_update);

				$session_data = array(
					'userId' => $this->session->userdata['user_logged']['userId'],
					'userFirstName' => $this->session->userdata['user_logged']['userFirstName'],
					'userLastName' => $this->session->userdata['user_logged']['userLastName'],
					'userEmail' => $this->session->userdata['user_logged']['userEmail'],
					'userIsVendor' => $this->session->userdata['user_logged']['userIsVendor'],
					'userVendorStep' => 'step1'	
				);

				$this->session->set_userdata('user_logged', $session_data);

				echo '{
					"status":"success",
					"message":"Successfully Added"
				}';


			}

		}

	}

	public function add_step2()
	{
		if($this->input->post('userVendorStep',TRUE)){

			$params_update = array(
				'userVendorStep' => $this->input->post('userVendorStep')
			);

			$user_id = $this->User_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params_update);

			$session_data = array(
				'userId' => $this->session->userdata['user_logged']['userId'],
				'userFirstName' => $this->session->userdata['user_logged']['userFirstName'],
				'userLastName' => $this->session->userdata['user_logged']['userLastName'],
				'userEmail' => $this->session->userdata['user_logged']['userEmail'],
				'userIsVendor' => $this->session->userdata['user_logged']['userIsVendor'],
				'userVendorStep' => $this->input->post('userVendorStep')	
			);

			$this->session->set_userdata('user_logged', $session_data);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function add_step3()
	{
		if($this->input->post('userVendorStep',TRUE)){

			$params_update = array(
				'userVendorStep' => $this->input->post('userVendorStep')
			);

			$user_id = $this->User_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params_update);

			$session_data = array(
				'userId' => $this->session->userdata['user_logged']['userId'],
				'userFirstName' => $this->session->userdata['user_logged']['userFirstName'],
				'userLastName' => $this->session->userdata['user_logged']['userLastName'],
				'userEmail' => $this->session->userdata['user_logged']['userEmail'],
				'userIsVendor' => $this->session->userdata['user_logged']['userIsVendor'],
				'userVendorStep' => $this->input->post('userVendorStep')	
			);

			$this->session->set_userdata('user_logged', $session_data);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function update_step1()
	{
		if($this->input->post('vdLocation',TRUE)){
			$params = array(
				'vdLocation' => $this->input->post('vdLocation'),
				'vdLocationLat' => $this->input->post('vdLocationLat'),
				'vdLocationLong' => $this->input->post('vdLocationLong'),
				'vdPLanguage' => $this->input->post('vdPLanguage'),
				'vdSLanguages' => $this->input->post('vdSLanguages'),
				'vdPCategories' => $this->input->post('vdPCategories'),
				'vdCountry' => $this->input->post('vdCountry'),
				'vdState' => $this->input->post('vdState'),
				'vdCity' => $this->input->post('vdCity'),
				'vdStreetAddress' => $this->input->post('vdStreetAddress'),
				'vdWebsites' => $this->input->post('vdWebsites'),
				'vdZIPCode' => $this->input->post('vdZIPCode')
			);


			$vendor_id = $this->Vendor_model->update_vendor_step($this->input->post('vdUserId'), $params);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function update_email()
	{
		if($this->input->post('vdEmail',TRUE)){

			/*
			$digits=4;
			$emailOTP=rand(pow(10, $digits-1), pow(10, $digits)-1);*/

			$emailOTP = 1234;

			$params = array(
				'vdEmail' => $this->input->post('vdEmail'),
				'vdEmailOTP' => $emailOTP,
			);


			$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function update_mobile()
	{
		if($this->input->post('vdMobile',TRUE)){

			/*
			$digits=4;
			$mobileOTP=rand(pow(10, $digits-1), pow(10, $digits)-1);*/

			$mobileOTP = 1234;

			$params = array(
				'vdMobile' => $this->input->post('vdMobile'),
				'vdMobileOTP' => $mobileOTP,
			);

			$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function verify_email()
	{
		if($this->input->post('vdEmailOTP',TRUE)){

			$params = array(
				'vdEmailOTP' => $this->input->post('vdEmailOTP'),
				'vdUserId' => $this->session->userdata['user_logged']['userId']
			);

			$params_update = array(
				'vdEmailOTP' => $this->input->post('vdEmailOTP'),
				'vdEmailVerify' => 'yes',
			);


			$vendor_emailOTP = $this->Vendor_model->verify_email($params);

			if($vendor_emailOTP == true){

				$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params_update);

				echo '{
					"status":"success",
					"message":"Email Verified"
				}';

			}else{
				echo '{
					"status":"failed",
					"message":"Wrong OTP"
				}';
			}

		}

	}


	public function verify_mobile()
	{
		if($this->input->post('vdMobileOTP',TRUE)){

			$params = array(
				'vdMobileOTP' => $this->input->post('vdMobileOTP'),
				'vdUserId' => $this->session->userdata['user_logged']['userId']
			);

			$params_update = array(
				'vdMobileOTP' => $this->input->post('vdMobileOTP'),
				'vdMobileVerify' => 'yes',
			);

			$vendor_mobileOTP = $this->Vendor_model->verify_mobile($params);

			if($vendor_mobileOTP == true){

				$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params_update);

				echo '{
					"status":"success",
					"message":"Mobile No Verified"
				}';

			}else{
				echo '{
					"status":"failed",
					"message":"Wrong OTP"
				}';
			}

		}

	}


	public function update_photoid()
	{
		if($_FILES['file']['name']){
			$uploads_dir='uploads/images/';

			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

	    	$imageName = uniqid("hjk");
	    	$imageFileName = $imageName.'.'.$ext;

			$getparams = array(
				'vdUserId' => $this->session->userdata['user_logged']['userId']
			);

			$oldImageIdData = $this->Vendor_model->get_image_name($getparams);

			unlink($uploads_dir.$oldImageIdData['vdPhotoIdImage']);
	    	move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$imageFileName);


			$params = array(
				'vdPhotoIdIMage' => $imageFileName
			);

			$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function update_profilephoto()
	{
		if($_FILES['file']['name']){
			$uploads_dir='uploads/images/';

			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

	    	$imageName = uniqid("hjk");
	    	$imageFileName = $imageName.'.'.$ext;

			$getparams = array(
				'vdUserId' => $this->session->userdata['user_logged']['userId']
			);

			$oldImageIdData = $this->Vendor_model->get_image_name($getparams);

			unlink($uploads_dir.$oldImageIdData['vdProfileImage']);
	    	move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir.$imageFileName);


			$params = array(
				'vdProfileImage' => $imageFileName
			);

			$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}

	public function update_aboutyourself()
	{
		if($this->input->post('vdAboutYourself',TRUE)){

			$params = array(
				'vdAboutYourself' => $this->input->post('vdAboutYourself')
			);


			$vendor_id = $this->Vendor_model->update_vendor_step($this->session->userdata['user_logged']['userId'], $params);

			echo '{
				"status":"success",
				"message":"Successfully Added"
			}';

		}

	}


	public function get_step1(){
		header('Content-Type: application/json');

		$params = array(
			'vdUserId' => $this->session->userdata['user_logged']['userId'],
		);

		$step1list= $this->Vendor_model->get_vendor_step1($params);

		$data = array(
			'vdId' => $step1list['vdId'],
			'vdUserId' => $step1list['vdUserId'],
			'vdLocation' => $step1list['vdLocation'],
			'vdLocationLat' => $step1list['vdLocationLat'],
			'vdLocationLong' => $step1list['vdLocationLong'],
			'vdPLanguage' => $step1list['vdPLanguage'],
			'vdSLanguages' => $step1list['vdSLanguages'],
			'vdPCategories' => $step1list['vdPCategories'],
			'vdCountry' => $step1list['vdCountry'],
			'vdState' => $step1list['vdState'],
			'vdCity' => $step1list['vdCity'],
			'vdStreetAddress' => $step1list['vdStreetAddress'],
			'vdWebsites' => $step1list['vdWebsites'],
			'vdZIPCode' => $step1list['vdZIPCode']
		);

		$json = json_encode($data);

		echo $json;

	}


	public function get_step2(){
		header('Content-Type: application/json');

		$params = array(
			'vdUserId' => $this->session->userdata['user_logged']['userId'],
		);

		$step2list= $this->Vendor_model->get_vendor_step1($params);

		$data = array(
			'vdId' => $step2list['vdId'],
			'vdUserId' => $step2list['vdUserId'],
			'vdPhotoIdImage' => $step2list['vdPhotoIdImage'],
			'vdPhotoIdImageLink' => base_url().'uploads/images/'.$step2list['vdPhotoIdImage'],
			'vdEmail' => $step2list['vdEmail'],
			'vdMobile' => $step2list['vdMobile']
		);

		$json = json_encode($data);

		echo $json;

	}


	public function get_all_languages()
	{
		header('Content-Type: application/json');
		$mnlanglist= $this->Mnlang_model->get_all_mnlang();

		$c=count($mnlanglist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'langId' => $mnlanglist[$i]['mnlangId'],
				'langSName' => $mnlanglist[$i]['mnlangSName'],
				'langFName' => $mnlanglist[$i]['mnlangFName']
			);

			$json = json_encode($data);

			echo $json;

            if($c-1!=$i){
				echo ",";
			}

		}
		echo ']';
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
				'pcatImageLink' => 'http://localhost/project_hijiko/hijikoadmin/uploads/webcontents/'.$pcatlist[$i]['pcatImageName']
			);

			$json = json_encode($data);

			echo $json;

            if($c-1!=$i){
				echo ",";
			}

		}
		echo ']';
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
			);

			$json = json_encode($data);

			echo $json;

            if($c-1!=$i){
				echo ",";
			}

		}
		echo ']';
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}