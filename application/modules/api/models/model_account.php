<?php
class Model_account extends CI_model
{
	protected $table = 'account';


	public function createAccount($data)
	{
		$data['password'] = md5($data['password']);
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function retrieveAccount($username)
	{
		if($username)
			$this->db->where('username', $username);
		return $this->db->get($this->table)->result_array();
	}

	public function updateAccount($data)
	{
		return $this->db->update($this->table,$data);
	}

	public function deleteAccount($data)
	{
		return $this->db->delete($this->table, $data);
	}
}
