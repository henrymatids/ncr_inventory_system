<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends MY_controller {

	public function index() {
		$this->loadPages(
			'inventory/inventory',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'inventory/inventory_script',
			array("activeHeaders"=>"NCR Laboratory")
		);
	}
}
