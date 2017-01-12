<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    function __construct()
    {
        parent::__construct();	
        $this->load->helper('url');
	} 

	public function index()
	{
		$this->load->view('include/dashboard_header');
		$this->load->view('dashboard/dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}