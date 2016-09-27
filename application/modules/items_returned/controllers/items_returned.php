<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items_returned extends MY_controller {

	public function index() {
		$this->loadPages(
			'items_returned/items_returned',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'items_returned/items_returned_script',
			array("activeHeaders"=>"NCR Laboratory")
		);
	}
}
