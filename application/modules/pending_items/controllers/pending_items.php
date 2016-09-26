<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_items extends MY_controller {

	public function index() {
		$this->loadPages(
			'pending_items/pending_items',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'pending_items/pending_items_script',
			array("activeHeaders"=>"NCR Laboratory")
		);

		/*	LOAD MODALS 	*/
		$this->load->view('pending_items_approveModal');
		$this->load->view('pending_items_deleteModal');
	}
}
