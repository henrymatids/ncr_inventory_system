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

	public function retrieveAccountId($username) {
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('username', $username);

		return $this->db->get($this->table)->result_array();
	}
	public function updateAccount($data, $id){
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('user_id', $id);
		return $this->db->update($this->table,$data);
	}

	public function deleteAccount($id){
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where("account.user_id", $id);
		
		return $this->db->delete($this->table);
	}

	public function retrieveAllAccount($searchBarValue = false){
		$this->db->start_cache();
		$this->db->flush_cache();

		if ($searchBarValue) {
			$this->db->where("user_id LIKE '%$searchBarValue%' OR 
				              username LIKE '%$searchBarValue%' OR
				              account_type LIKE '%$searchBarValue%' OR
				              id_number LIKE '%$searchBarValue%' OR
				              firstname LIKE '%$searchBarValue%' OR
				              middlename LIKE '%$searchBarValue%' OR
				              lastname LIKE '%$searchBarValue%'");
		}

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
