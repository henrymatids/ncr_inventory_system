<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_dashboard extends API_controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('dashboard');
	}
}
