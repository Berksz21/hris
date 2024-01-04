<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_list extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/Employee/employee_list');
		$this->load->view('template/tools/modal');
		$this->load->view('template/sidebar/side_navbar');
		$this->load->view('template/footer');
	}
}
