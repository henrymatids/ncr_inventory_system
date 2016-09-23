<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_controller{

	public function index() {
		$this->loadPages(
			'home/home',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'home/home_script',
			array("activeHeaders"=>"Home")
		);

		/*	LOAD MODAL 	*/
		$this->load->view('dashboard_profileModal');
	}
}
