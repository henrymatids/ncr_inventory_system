<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_liabilities extends MY_controller {

	public function index() {
		$this->loadPages(
			'account_liabilities/account_liabilities',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'account_liabilities/account_liabilities_script',
			array("activeHeaders"=>"NCR Laboratory")
		);

	}
}
