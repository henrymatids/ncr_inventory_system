<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index() {
		if ($this->session->userdata('user_isLoggedIn')) {
			header("location:".base_url('dashboard'));
		} else {
			$this->loadPages(
				'login/login',
				'login/login_header',
				'login/login_footer',
				'login/login_script',
				array("activeHeaders"=>"NCR Laboratory")
			);		
		}
		// $result = $this->session->userdata('user_currentlyloggedIn');

		// var_dump($result['username']);
	}

	public function logout() {
			$this->session->set_userdata('user_isLoggedIn', false);
			$this->session->unset_userdata('user_currentlyloggedIn', $session_data);
			header("location:".base_url('login'));
	}
}
