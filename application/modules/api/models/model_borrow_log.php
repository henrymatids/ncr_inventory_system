<?php
class Model_borrow_log extends CI_model {
	
	protected $table = "borrow_log";

	public function retrieveBorrowLog($status = FALSE, $searchBarValue = FALSE) {
		$this->db->start_cache();
		$this->db->flush_cache();
			
		if ($status) {
			$this->db->where('status', $status);
		} 

		if ($searchBarValue) {
			$this->db->where("inventory.item_name LIKE '%$searchBarValue%' OR
							  inventory.brand_model LIKE '%$searchBarValue%' OR
							  $this->table.user_id_number LIKE '%$searchBarValue%' OR
							  $this->table.date_borrowed LIKE '%$searchBarValue%'
							");
		}
		$this->db->select('*')
							  ->from($this->table)
							  ->join('inventory', 'inventory.id = borrow_log.item_id');
		return $this->db->get()->result_array();
	}

	public function insertBorrowedItem($data) {
		$this->db->start_cache();
		$this->db->flush_cache();

		return $this->db->insert($this->table, $data);
	}
}