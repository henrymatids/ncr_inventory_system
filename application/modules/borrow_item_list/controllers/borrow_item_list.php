<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow_item_list extends MY_controller {

	public function index() {
		$this->loadPages(
			'borrow_item_list/borrow_item_list',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'borrow_item_list/borrow_item_list_script',
			array("activeHeaders"=>"NCR Laboratory")
		);

		/* LOAD MODAL */

		$this->load->view('borrow_item_list_borrowModal');
	}
}
