<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('template/login');
	}

	public function userLogin()
	{
		if($this->input->post('txtusername') == "Admin" && $this->input->post('txtpassword')== "xxx123"){
			redirect('Home');
		}else{
			$this->load->view('login');
		}
	}
}
