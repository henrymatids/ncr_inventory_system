<?php

class Model_account_information extends CI_model{

	protected $table = "account_information";

	public function createAccountInformation($data){

		return $this->db->insert($this->table, $data);
	}
}