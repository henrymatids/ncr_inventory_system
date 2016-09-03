<?php
class Model_inventory extends CI_model
{
	protected $table = 'inventory';


	public function insert_item($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function retrieve_item($data)
	{
		return $this->db->get($this->table)->result_array();
	}

	public function update_item($data)
	{
		return $this->db->update($this->table,$data);
	}

	public function delete_item($data)
	{
		return $this->db->delete($this->table, $data);
	}
}
