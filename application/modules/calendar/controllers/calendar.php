<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends MY_controller {

	public function index() {
		$this->loadPages(
			'calendar/calendar',
			'dashboard/dashboard_header',
			'dashboard/dashboard_footer',
			'calendar/calendar_script',
			array("activeHeaders"=>"NCR Laboratory")
		);
	}
}
