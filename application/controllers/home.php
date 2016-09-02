<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['users_model'=>'users']);
	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function addUser()
	{
		$result = $this->input->post();
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('conpassword', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('account_type', 'Account Type', 'required');

		if($result['submit']==TRUE)
		{
			if($this->form_validation->run()==FALSE)
			{
				redirect('home');
			} else {
				$data = array(	'username'=>$result['username'],
					'password'=>$result['password'],
					'account_type'=>$result['account_type']);
				$this->users->insert_user($data);

				redirect('home');
			}	
		} else {
			redirect('inventory');
		}
		
	}
}
