<?php
class Model_account extends CI_model
{
	protected $table = 'account';


	public function createAccount($data){
		$this->db->start_cache();
		$this->db->flush_cache();

		$data['password'] = md5($data['password']);
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function retrieveAccount($username){
		$this->db->start_cache();
		$this->db->flush_cache();

		if($username)
			$this->db->where('username', $username);
		return $this->db->get($this->table)->result_array();
	}

	public function updateAccount($data){
		$this->db->start_cache();
		$this->db->flush_cache();

		return $this->db->update($this->table,$data);
	}

	public function deleteAccount($id){
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('id', $id);
		
		return $this->db->delete($this->table, $data);
	}

	public function retrieveAllAccount(){
		$this->db->start_cache();
		$this->db->flush_cache();

		$query = $this->db->select("*")
										->from($this->table)
										->join('account_information','account_information.fk_id = account.user_id')
										->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
			return $result;
		}
		return false;
	}
}
