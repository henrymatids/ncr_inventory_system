<?php
class Model_inventory extends CI_model
{
	protected $table = 'inventory';


	public function insert_item($data)
	{
		$this->db->start_cache();
		$this->db->flush_cache();
		
		return $this->db->insert($this->table, $data);
	}

	public function retrieve_item($item_name = FALSE, $item_description = FALSE)
	{
		$this->db->start_cache();
		$this->db->flush_cache();

		if($item_name)
			$this->db->where('item_name', $item_name);
		if($item_description)
			$this->db->where('item_description', $item_description);

		return $this->db->get($this->table)->result_array();
	}

	public function update_item($data, $id)
	{
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('id', $id);

		return $this->db->update($this->table,$data);
	}

	public function delete_item($id)
	{
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('id', $id);

		return $this->db->delete($this->table);
	}

	public function retrieve_inventory() {
		$this->db->start_cache();
		$this->db->flush_cache();

		$query = $this->db->select("*")
											->from($this->table)
											->get();

		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			return $result;
		}
		return false;
	}
}
