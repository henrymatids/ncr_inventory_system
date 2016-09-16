<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_management extends MY_controller {

	public function index() {
		$this->loadPages(
			'user_management/user_management',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'user_management/user_management_script',
			array("activeHeaders"=>"NCR Laboratory")
		);
	}
}
