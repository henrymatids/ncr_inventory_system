<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index() {
		$this->loadPages(
			'login/login',
			'login/login_header',
			'login/login_footer',
			'login/login_script',
			array("activeHeaders"=>"Login")
		);
	}

	public function logout() {
			$this->session->set_userdata('user_isLoggedIn', false);
			$this->session->unset_userdata('user_currentlyloggedIn', $session_data);
			header("location:".base_url('login'));
	}
}
