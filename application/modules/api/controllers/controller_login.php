<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends API_controller{

	public function __construct() {
		parent::__construct();
		$this->load->model("model_login");
	}

	public function index() {
		$this->load->view('login');
	}

	public function userLogin() {
		$this->form_validation->set_rules('userName', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$error = array(
						"userName" => form_error('userName'),
						"password" => form_error('password')
					);
			$this->responseError(2, $error);
		} else {
			$result = $this->model_login->authenticate_user($this->input->post("userName"), $this->input->post("password"));
			$session_data = array(
					'userType' => $result['account_type'],
					'username' => $result['username'],
					'userId' => $result['user_id']
			);

			$this->session->set_userdata('user_isLoggedIn', true);
			$this->session->set_userdata('user_currentlyloggedIn', $session_data);

			if ($result) {
				$this->responseData($result);
			} else {
				$error = array("incorrect" => "The username and password combination is incorrect.");
				$this->responseError(2, $error);
			}
		}
		$this->outputResponse();
	}
}
