<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_inventory extends API_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(['model_inventory' => 'inventory']);
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
		if($this->input->post('itemId')){
			$this->inventory->delete_item($this->input->post('itemId'));
		} else {
			$this->responseError(33, 'Delete Failed');
		}
		$this->outputResponse();
	}
	public function getInventoryList() {
		$data = $this->inventory->retrieve_inventory();
		$this->responseData($data);
		$this->outputResponse();
	}
}
