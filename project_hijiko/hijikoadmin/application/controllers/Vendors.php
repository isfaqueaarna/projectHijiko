<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('USER_IMAGE_URL', 'http://localhost/project_hijiko/hijiko/uploads/images/');

class Vendors extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Mnlang_model');	
        $this->load->model('Pcat_model');
        $this->load->helper('url');
        $this->load->helper('form');
	} 

	public function index()
	{
		if(isset($this->session->userdata['logged_user'])){

			$this->load->view('include/dashboard_header');
			$this->load->view('general/vendors');

		}else{

			redirect('/login');

		}
	}


	public function get_all_vendors()
	{
		header('Content-Type: application/json');
		$vendorlist= $this->User_model->get_all_vendors();

		$c=count($vendorlist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'vendorId' => $vendorlist[$i]['userId'],
				'vendorFirstName' => $vendorlist[$i]['userFirstName'],
				'vendorLastName' => $vendorlist[$i]['userLastName'],
				'vendorEmail' => $vendorlist[$i]['userEmail'],
				'vendorVerified' => $vendorlist[$i]['userIsVendor'],
				'vendorStatus' => $vendorlist[$i]['userVendorStatus'],
				'vendorLocation' => $vendorlist[$i]['vdLocation'],
				'vendorPLanguage' => $vendorlist[$i]['vdPLanguage'],
				'vendorSLanguages' => $vendorlist[$i]['vdSLanguages'],
				'vendorPCategories' => $vendorlist[$i]['vdPCategories'],
				'vendorCountry' => $vendorlist[$i]['vdCountry'],
				'vendorState' => $vendorlist[$i]['vdState'],
				'vendorCity' => $vendorlist[$i]['vdCity'],
				'vendorStreetAddress' => $vendorlist[$i]['vdStreetAddress'],
				'vendorWebsites' => $vendorlist[$i]['vdWebsites'],
				'vendorZIPCode' => $vendorlist[$i]['vdZIPCode'],
				'vendorPhotoIdImage' => $vendorlist[$i]['vdPhotoIdImage'],
				'vendorPhotoIdImageLink' => USER_IMAGE_URL.$vendorlist[$i]['vdPhotoIdImage'],
				'vendorVerifiedEmail' => $vendorlist[$i]['vdEmail'],
				'vendorVerifiedMobile' => $vendorlist[$i]['vdMobile'],
				'vendorProfileImage' => $vendorlist[$i]['vdProfileImage'],
				'vendorProfileImageLink' => USER_IMAGE_URL.$vendorlist[$i]['vdProfileImage'],
				'vendorAboutYourself' => $vendorlist[$i]['vdAboutYourself']
			);

			$json = json_encode($data);

			echo $json;

            if($c-1!=$i){
				echo ",";
			}

		}
		echo ']';
	}


	public function vendor_verification()
	{
		if($this->input->post('userId',TRUE)){

			$params = array(
				'userVendorStatus' => $this->input->post('userVendorStatus'),
				'userIsVendor' => $this->input->post('userIsVendor')
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


	public function get_all_active_languages()
	{
		header('Content-Type: application/json');
		$mnlanglist= $this->Mnlang_model->get_all_active_mnlang();

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


	public function get_all_active_categories()
	{
		header('Content-Type: application/json');
		$pcatlist= $this->Pcat_model->get_all_active_pcat();

		$c=count($pcatlist);
		echo '[';

		for($i=0;$i<$c;$i++){

			$data = array(
				'pcatId' => $pcatlist[$i]['pcatId'],
				'pcatName' => $pcatlist[$i]['pcatName']
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