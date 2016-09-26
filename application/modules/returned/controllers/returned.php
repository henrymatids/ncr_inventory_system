<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returned extends MY_controller {

	public function index() {
		$this->loadPages(
			'returned/returned',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'returned/returned_script',
			array("activeHeaders"=>"NCR Laboratory")
		);
	}
}
