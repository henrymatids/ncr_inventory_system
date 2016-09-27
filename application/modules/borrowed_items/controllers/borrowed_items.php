<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrowed_items extends MY_controller {

	public function index() {
		$this->loadPages(
			'borrowed_items/borrowed_items',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'borrowed_items/borrowed_items_script',
			array("activeHeaders"=>"NCR Laboratory")
		);

		/* LOAD MODAL */

		$this->load->view('borrowed_items_returnModal');
	}
}
