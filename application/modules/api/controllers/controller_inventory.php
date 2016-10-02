<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_inventory extends API_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(['model_inventory' => 'inventory']);
		$this->load->model(['model_borrow_log' => 'borrow_log']);
	}

	public function addItem() {

		$this->form_validation->set_rules('quantity', 'Quantity', 'required');
		$this->form_validation->set_rules('item_name', 'Item Name', 'required');
		$this->form_validation->set_rules('brand_model', 'Brand Model','required');
		$this->form_validation->set_rules('date_acquired', 'Date Acquired', 'required');
		$this->form_validation->set_rules('remarks', 'Remarks', 'required');

		if($this->form_validation->run()){
			$data = array(
							'qty' => $this->input->post('quantity'),
						  'item_name' => $this->input->post('item_name'),
						  'brand_model' => $this->input->post('brand_model'),
						  'date_acquired' => $this->input->post('date_acquired'),
						  'remarks' => $this->input->post('remarks')
						  );

			$this->responseData($data);
			$this->inventory->insert_item($data);
		} else {
			$this->responseError(10, $this->form_validation->error_array());
		}
		$this->outputResponse();
	}

	public function updateItem(){
		$data = array(
						'qty' => $this->input->post('editItemQuantity'),
						'item_name' => $this->input->post('editItemName'),
						'brand_model' => $this->input->post('editItemBrand'),
						'date_acquired' => $this->input->post('editItemDate'),
						'remarks' => $this->input->post('editItemRemarks')
						);
		$this->responseData($data);
		$this->inventory->update_item($data,$this->input->post('itemID'));
		$this->outputResponse();
	}

	public function deleteItem(){
		$result = $this->inventory->delete_item($this->input->post('itemId'));
		
		if ($result) {
			$this->responseData($result);
		} else {
			$this->responseError(33, 'Delete Failed');
		}
		$this->outputResponse();
	}

	public function getInventoryList() {
		$data = $this->inventory->retrieve_inventory(0, $this->input->post('item_name'));
		$this->responseData($data);
		$this->outputResponse();
	}

	public function getAllAvailableItems() {
		$data = $this->inventory->retrieve_inventory(1, $this->input->post('item_name'));
		$this->responseData($data);
		$this->outputResponse();
	}

	public function borrowedItemForApproval() {
		$item = $this->inventory->retrieveItemID(	$this->input->post('borrowItemName'),
													$this->input->post('borrowItemBrand'));

		$data = array('user_id_number' 	=> $this->input->post('borrowIdNumber'),
					  'item_id'			=> $item[0]['id'],
					  'borrow_qty'				=> $this->input->post('borrowItemQuantity'),
					  'date_borrowed'	=> $this->input->post('borrowItemDate'),
					  'status'			=> 1
						);

		$this->borrow_log->insertBorrowedItem($data);
		$this->responseData($data);
		$this->outputResponse();
	}

	public function borrowedItemChangeStatus() {

		$availableQuantity = $this->borrow_log->getUserBorrowedItems(0, 0, 0, $this->input->post('id'));
		$newQuantity = $availableQuantity[0]['remaining_qty'] + $availableQuantity[0]['borrow_qty'];
		$this->inventory->update_item(array('remaining_qty' => $newQuantity),
										$availableQuantity[0]['id']);
		
		$data = array('status'=> 3,
					   'date_returned' => $this->input->post('borrowedItemDate'));

		$response = $this->borrow_log->changeBorrowedItemStatus($data, $this->input->post('id'));
		$this->responseData($response);
		$this->outputResponse();
	}

	public function getAllPendingItems() {
		$data = $this->borrow_log->retrieveBorrowLog(1, $this->input->post('searchBarValue'));

		$this->responseData($data);
		$this->outputResponse();
	}

	public function getAllReturnedItems() {
		$data = $this->borrow_log->retrieveBorrowLog(3, $this->input->post('searchBarValue'));

		$this->responseData($data);
		$this->outputResponse();
	}

	public function getAllApprovedItems() {
		$data = $this->borrow_log->retrieveBorrowLog(2, $this->input->post('searchBarValue'));

		$this->responseData($data);
		$this->outputResponse();
	}
	public function changeItemStatus() {

		$availableQuantity = $this->borrow_log->getUserBorrowedItems(0, 0, 0, $this->input->post('id'));
		$newQuantity = $availableQuantity[0]['remaining_qty'] - $availableQuantity[0]['borrow_qty'];
		$this->inventory->update_item(array('remaining_qty' => $newQuantity),
										$availableQuantity[0]['id']);
		$data = array('status' => $this->input->post('status'));
		$response = $this->borrow_log->changeBorrowedItemStatus($data, $this->input->post('id'));

		if (!$response) {
			$this->responseError(44, 'Changing status failed');
		} else {
			$this->responseData($availableQuantity);
		}

		$this->outputResponse();
	}

	public function deletePendingItem() {

		$response = $this->borrow_log->deleteBorrowedItem($this->input->post('id'));

		if(!$response) {
			$this->responseError(44, 'Failed Delete');
		} else {
			$this->responseData($this->input->post('id'));
		}

		$this->outputResponse();
	}

	public function getUserBorrowedItems() {

		$response = $this->borrow_log->getUserBorrowedItems(2, $this->input->post('search_BarValue'), $this->input->post('id_number'));

		if(!$response) {
			$this->responseError(43,'Failed to retrieve');
		} else {
			$this->responseData($response);
		}

		$this->outputResponse();
	}
	
}
