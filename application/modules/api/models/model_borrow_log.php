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
							  $this->table.status = '$status' AND inventory.brand_model LIKE '%$searchBarValue%' OR
							  $this->table.status = '$status' AND $this->table.user_id_number LIKE '%$searchBarValue%' OR
							  $this->table.status = '$status' AND $this->table.date_borrowed LIKE '%$searchBarValue%'
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

	public function changeBorrowedItemStatus($data, $id) {
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('log_id', $id);

		return $this->db->update($this->table, $data);
	}

	public function deleteBorrowedItem($id) {
		$this->db->start_cache();
		$this->db->flush_cache();

		$this->db->where('log_id', $id);

		return $this->db->delete($this->table);
	}

	public function getUserBorrowedItems($status = FALSE, $searchBarValue = FALSE, $user_id_number = FALSE) {

		if($status) {
			$this->db->where('status', $status);
		}

		if($user_id_number) {
			$this->db->where('user_id_number', $user_id_number);
		}

		if($searchBarValue) {
			$this->db->where("inventory.item_name LIKE '%$searchBarValue%' OR
							  $this->table.status = '$status' AND $this->table.user_id_number = '$user_id_number' AND inventory.brand_model LIKE '%$searchBarValue%' OR
							  $this->table.status = '$status' AND $this->table.user_id_number = '$user_id_number' AND $this->table.user_id_number LIKE '%$searchBarValue%' OR
							  $this->table.status = '$status' AND $this->table.user_id_number = '$user_id_number' AND $this->table.date_borrowed LIKE '%$searchBarValue%'
							");
		}
		$this->db->select('*')
							  ->from($this->table)
							  ->join('inventory', 'inventory.id = borrow_log.item_id');
		return $this->db->get()->result_array();
	}
}