<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_account extends API_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(['model_account' => 'account']);
		$this->load->model(['model_account_information' => 'account_information']);
	}

	public function createAccount() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('conpassword', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('id_number', 'ID number', 'required');
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('middlename', 'Middlename', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('account_type', 'Account Type', 'required');

		if ($this->form_validation->run()) {
			$rawData = array('username' => $this->input->post('username'),
							 'password' => $this->input->post('password'),
							 'id_number' => $this->input->post('id_number'),
							 'firstname' => $this->input->post('firstname'),
							 'middlename' => $this->input->post('middlename'),
							 'lastname' => $this->input->post('lastname'),
							 'account_type' => $this->input->post('account_type')
							 );

			$this->responseData($rawData);

			$result = $this->account->createAccount(array('username' => $this->input->post('username'),
														  'password' => $this->input->post('password'),
														  'account_type' => $this->input->post('account_type')
														  ));
			if ($result) {
				$data = array('fk_id' =>  $result,
							  'id_number' => $this->input->post('id_number'),
							  'firstname' => $this->input->post('firstname'),
							  'middlename' => $this->input->post('middlename'),
							  'lastname' => $this->input->post('lastname')
							  );
				$this->account_information->createAccountInformation($data);
			} else {
				$this->responseError(1, 'Failed to Create');
			}
		} else {
			$this->responseError(8, $this->form_validation->error_array());
		}
		$this->outputResponse();
	}

	public function deleteAccount() {
		$result = $this->account->deleteAccount($this->input->post('accountId'));

		if ($result) {
			$this->responseData($result);
		} else {
			$this->responseError(33, 'Delete Failed');
		}
		$this->outputResponse();
	}
	public function updateAccount() {
		$data = array(
					   'username' 	=> $this->input->post('editUserUsername'),
					   'account_type'=> $this->input->post('editUserAccountType')
					   );
		$data2 = array(
					   'id_number' 	=> $this->input->post('editUserIdNumber'),
					   'firstname'	=> $this->input->post('editUserFirstname'),
					   'middlename'	=> $this->input->post('editUserMiddlename'),
					   'lastname'	=> $this->input->post('editUserLastname')
					   );

		$this->account->updateAccount($data, $this->input->post('accountID'));
		$this->account_information->updateAccountInformation($data2, $this->input->post('accountID'));
		
		$this->responseData($data);
		$this->outputResponse();
	}
	public function getAccountList() {
		$data = $this->account->retrieveAllAccount();
		$this->responseData($data);
		$this->outputResponse();
	}

	public function username_is_unique($str) {
		echo "<script>console.log('qweqweqweq')</script>";
		$result = $this->account->retrieveAccount($str);
		echo "<script>console.log(".$result.");</script>";
		if(!$result){

			$this->form_validation->set_message('username_is_unique', '{field} already in use.');
			return false;
		} else {
			return true;
		}
	}
}
	