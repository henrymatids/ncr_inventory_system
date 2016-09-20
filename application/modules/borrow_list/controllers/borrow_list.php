<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow_list extends MY_controller {

	public function index() {
		$this->loadPages(
			'borrow_list/borrow_list',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'borrow_list/borrow_list_script',
			array("activeHeaders"=>"NCR Laboratory")
		);

		/* LOAD MODAL */

		$this->load->view('borrow_list_borrowModal');
	}
}
