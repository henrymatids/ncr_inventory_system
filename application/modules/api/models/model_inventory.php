<?php
class Model_inventory extends CI_model
{
	protected $table = 'inventory';


	public function insert_item($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function retrieve_item($item_name = FALSE, $item_description = FALSE)
	{
		if($item_name)
			$this->db->where('item_name', $item_name);
		if($item_description)
			$this->db->where('item_description', $item_description);

		return $this->db->get($this->table)->result_array();
	}

	public function update_item($data, $id)
	{
		$this->db->where('id', $id);
			
		return $this->db->update($this->table,$data);
	}

	public function delete_item($id)
	{
		$this->db->where('id', $id);

		return $this->db->delete($this->table);
	}
}
