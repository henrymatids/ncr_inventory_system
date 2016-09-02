<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(['Users_model'=>'users']);
	}

	public function index(){
		$this ->load->view('Login');
	}

	public function LogInAttempt(){
		
		$result = $this->input->post();
		$this->users->authentication_user($result);
	}
}