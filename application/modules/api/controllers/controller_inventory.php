<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_inventory extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['model_inventory'=>'inventory']);
	}
	public function index()
	{
		$data['title'] = "addItems";
		$this->load->view('templates/header', $data);
		$this->load->view('addItem');
		$this->load->view('templates/footer');
	}
	public function addItem()
	{
		$result = $this->input->post();
		$this->form_validation->set_rules('item_name', 'Item name', 'required');
		$this->form_validation->set_rules('quantity', 'Quantity','required');

		if($result['submit']==TRUE)
		{
			if($this->form_validation->run()==FALSE)
			{
				redirect('Inventory');
			} else {
				$data = array(
						'item_name'=>$result['item_name'],
						'quantity'=>$result['quantity']
						);
				$this->inventory->insert_item($data);
				redirect('Inventory');
			}
		} else
		{
			redirect('home');
		}

	}
}
