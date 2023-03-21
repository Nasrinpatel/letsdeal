<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customermaster extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/Customermaster_model', 'customermaster');
		$this->form_validation->set_error_delimiters('<div class="bg-red-dark m-1 rounded-sm shadow-xl text-center line-height-xs font-10 py-1 text-uppercase mb-0 font-700">', '</div>');
	}

	public function index()
	{
		$data['page_name'] = 'customer_master_view';
		$this->load->view('admin/index', $data);
	}

	public function add()
	{
		$data['sourcemaster'] = $this->customermaster->getSourceMaster();
		$data['position'] = $this->customermaster->getPosition();
		$data['page_name'] = 'customer_master_add';
		$this->load->view('admin/index', $data);
	}
	public function store()
	{		
		// $this->form_validation->set_rules('source_id', 'Source','required');
		// $this->form_validation->set_rules('assigned_id	', 'Assigned','required');
		// $this->form_validation->set_rules('position_id', 'Position','required');
		// $this->form_validation->set_rules('first_name', 'First name','required');
		// $this->form_validation->set_rules('last_name', 'Last name','required');
		
		// $this->form_validation->set_rules('phone', 'Phone','required');
		// $this->form_validation->set_rules('email', 'Email','required');
		// $this->form_validation->set_rules('company_name', 'Company name','required');
		// $this->form_validation->set_rules('description', 'Description','required');
		// $this->form_validation->set_rules('status', 'Status','required');
		// if ($this->form_validation->run() == false) {
		// //echo validation_errors();die;
		// 	$this->add();
		// } else {
			$formArray = array();
			$formArray['source_id'] = $this->input->post('source_id');
			$formArray['assigned_id'] = $this->input->post('assigned_id');
			$formArray['position_id'] = $this->input->post('position_id');
			$formArray['first_name'] = $this->input->post('first_name');
			$formArray['last_name'] = $this->input->post('last_name');
			$formArray['phone'] = $this->input->post('phone');
			$formArray['email'] = $this->input->post('email');
			$formArray['company_name'] = $this->input->post('company_name');
			$formArray['description'] = $this->input->post('description');
			$formArray['status'] = $this->input->post('status');
		
			$response = $this->customermaster->saverecords($formArray);

			if ($response == true) {
				$this->session->set_flashdata('success', 'Customer Master Added Successfully.');
			} else {
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
			}
			return redirect('admin/Customermaster/');
		// }
		
	}
	public function delete($id)
	{
		$response = $this->customermaster->delete($id);

		if($response == true)
		{
			$this->session->set_flashdata('success', 'Customer Master Deleted Successfully.');
		}else{
			$this->sesssion->set_flashdata('error','Something went wrong. Please try again');
		}
		return redirect('admin/Customermaster/');
		

	}
}
