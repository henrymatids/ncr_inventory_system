<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends API_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(['model_login'=>'users']);
	}

	public function index(){
		$this ->load->view('Login');
	}

	public function LogInAttempt(){

		$result = $this->input->post();
		$this->users->authentication_user($result);
	}
}
