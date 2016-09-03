<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_controller{

	public function index() {
		$this->load->view('home/home');
		// $this->load->view('home/home_script');
	}
}
