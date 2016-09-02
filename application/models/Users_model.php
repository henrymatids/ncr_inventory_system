<?php
class Users_model extends CI_model
{
	protected $table = 'accounts';


	public function insert_user($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function retrieve_user($data)
	{
		return $this->db->get($this->table)->result_array();
	}

	public function update_user($data)
	{
		return $this->db->update($this->table,$data);
	}

	public function delete_user($data)
	{
		return $this->db->delete($this->table, $data);
	}
	public function authenticate_user($data){
		$data['password']=md5($data['password']);
		return $this->db->get_where($this->table,$data)->result_array();
	}
}