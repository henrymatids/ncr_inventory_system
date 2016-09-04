<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends MY_controller {

	public function index() {
		$this->load->view('inventory/inventory');
		// $this->load->view('inventory/inventory_script');
	}
}
