<?php

class Model_account_information extends CI_model{

	protected $table = "account_information";

	public function createAccountInformation($data){
		$this->db->start_cache();
		$this->db->flush_cache();

		return $this->db->insert($this->table, $data);
	}

	public function updateAccountInformation($data, $id){
		$this->db->start_cache();
		$this->db->flush_cache();
		
		$this->db->where('fk_id', $id);
		return $this->db->update($this->table, $data);
	}
}