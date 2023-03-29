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

	public function all()
	{
		$customer = $this->customermaster->all();
		$result = array('data'=>[]);
		$i=1;
		foreach ($customer as $value) { 
			$source_data = $this->db->get_where('tb_source_master',array('id'=>$value['source_id']))->row();
			$position_data = $this->db->get_where('tb_position_master',array('id'=>$value['position_id']))->row();
			$staff_data = $this->db->get_where('tbl_staff_master',array('id'=>$value['assigned_id']))->row();

			$button = '<a href="'.base_url('admin/customermaster/edit/' .$value['id']).'" class="action-icon edit-btn"><i class="mdi mdi-square-edit-outline"></i></a>
			<a href="'.base_url('admin/customermaster/delete/' .$value['id']).'" class="action-icon delete-btn"> <i class="mdi mdi-delete"></i></a>';
			$result['data'][] = array(
				$i++,
				$value['first_name'].' '.$value['last_name'],
				$value['phone'],
				$value['email'],
				$value['company_name'],
				($source_data != null)?$source_data->name:'',
				($position_data != null)?$position_data->name:'',
				($staff_data != null)?$staff_data->first_name.' '.$staff_data->last_name:'',
				$value['status'],
				$button
			);
		}
		echo json_encode($result);
	}

	public function all_contact($id)
	{
		$contacts = $this->customermaster->getCustomerContact($id);
		$result = array('data'=>[]);
		$i=1;
		foreach ($contacts as $value) { 
			$position_data = $this->db->get_where('tb_position_master',array('id'=>$value['position_id']))->row();

			$button = '<a href="'.base_url('admin/customermaster/edit_contact/' .$value['id']).'" class="action-icon edit-btn" data-id="'.$value['id'].'" data-bs-toggle="modal" data-bs-target="#edit-customer-contact-modal"><i class="mdi mdi-square-edit-outline"></i></a>
			<a href="'.base_url('admin/customermaster/delete_contact/' .$value['id'].'/'.$id).'#customer-contacts" class="action-icon delete-btn"> <i class="mdi mdi-delete"></i></a>';
			$result['data'][] = array(
				$i++,
				$value['first_name'].' '.$value['last_name'],				
				($position_data != null)?$position_data->name:'',				
				$value['company_name'],
				$value['email'],
				$value['phone'],
				$value['status'],
				$button
			);
		}
		echo json_encode($result);
	}
	public function all_note($id)
	{
		$notes = $this->customermaster->getCustomerNote($id);
		$result = array('data'=>[]);
		$i=1;
		foreach ($notes as $value) { 

			$button = '<a href="'.base_url('admin/customermaster/edit_note/' .$value['id']).'" class="action-icon edit-btn" data-id="'.$value['id'].'" data-bs-toggle="modal" data-bs-target="#edit-customer-notes-modal"><i class="mdi mdi-square-edit-outline"></i></a>
			<a href="'.base_url('admin/customermaster/delete_note/' .$value['id'].'/'.$id).'#customer-notes" class="action-icon delete-btn"> <i class="mdi mdi-delete"></i></a>';
			$result['data'][] = array(
				$i++,			
				$value['name'],
				date('d M Y h:i:s a',strtotime($value['created_date'])),
				$value['status'],
				$button
			);
		}
		echo json_encode($result);
	}

	public function add()
	{
		$data['sourcemaster'] = $this->customermaster->getSourceMaster();
		$data['source'] = $this->customermaster->getSource();
		$data['position'] = $this->customermaster->getPosition();
		$data['staff'] = $this->customermaster->getStaff();
		$data['agent'] = $this->customermaster->getAgent();
		$data['page_name'] = 'customer_master_add';
		$this->load->view('admin/index', $data);
	}
//Customer master
	public function store()
	{		
		
		$this->form_validation->set_rules('inquiry_type', 'Inquiry type','required');
		$this->form_validation->set_rules('source_id', 'Source','required');
		$this->form_validation->set_rules('assigned_id', 'Assigned','required');
		$this->form_validation->set_rules('position_id', 'Position','required');
		$this->form_validation->set_rules('first_name', 'First name','required');
		$this->form_validation->set_rules('last_name', 'Last name','required');		
		$this->form_validation->set_rules('phone', 'Phone','required');
		$this->form_validation->set_rules('email', 'Email','required');
		$this->form_validation->set_rules('company_name', 'Company name','required');
		$this->form_validation->set_rules('description', 'Description','required');
		$this->form_validation->set_rules('status', 'Status','required');
		if ($this->form_validation->run() == false) {
			$this->add();
		} else {
			$formArray = array();
			$formArray['inquiry_type'] = $this->input->post('inquiry_type');
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
		}
		
	}
	//Contact master
	public function store_contact()
	{	
		$formArray = array();			
		$formArray['customer_id'] = $this->input->post('customer_id');	
		$formArray['first_name'] = $this->input->post('first_name');
		$formArray['last_name'] = $this->input->post('last_name');
		$formArray['position_id'] = $this->input->post('position_id');
		$formArray['company_name'] = $this->input->post('company_name');
		$formArray['email'] = $this->input->post('email');
		$formArray['phone'] = $this->input->post('phone');
		$formArray['description'] = $this->input->post('description');
		$formArray['status'] = $this->input->post('status');
	
		$response = $this->customermaster->save_contact_records($formArray);

		if ($response == true) {
			echo json_encode(array('success'=>true,'message'=>'Customer Contact Added Successfully.'));
		} else {
			echo json_encode(array('success'=>false,'message'=>'Something went wrong. Please try again'));
		}	
	}

	public function edit($id)
	{
		$data['customer'] = $this->customermaster->getCustomer($id);
		// $data['contacts'] = $this->customermaster->getCustomerContact($id);
		$data['sourcemaster'] = $this->customermaster->getSourceMaster();
		$data['source'] = $this->customermaster->getSource();
		$data['position'] = $this->customermaster->getPosition();
		$data['staff'] = $this->customermaster->getStaff();
		$data['agent'] = $this->customermaster->getAgent();
		$data['page_name'] = 'customer_master_edit';
		$this->load->view('admin/index', $data);
	}
	
	public function edit_contact($id)
	{	
		$data = $this->customermaster->getContact($id);
		echo json_encode($data);
	}

	public function update($id){
		$this->form_validation->set_rules('inquiry_type', 'Inquiry type','required');
		$this->form_validation->set_rules('source_id', 'Source','required');
		$this->form_validation->set_rules('assigned_id', 'Assigned','required');
		$this->form_validation->set_rules('position_id', 'Position','required');
		$this->form_validation->set_rules('first_name', 'First name','required');
		$this->form_validation->set_rules('last_name', 'Last name','required');		
		$this->form_validation->set_rules('phone', 'Phone','required');
		$this->form_validation->set_rules('email', 'Email','required');
		$this->form_validation->set_rules('company_name', 'Company name','required');
		$this->form_validation->set_rules('description', 'Description','required');
		$this->form_validation->set_rules('status', 'Status','required');

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		}else{
			$formArray = array();
			$formArray['inquiry_type'] = $this->input->post('inquiry_type');
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
		
			$response = $this->customermaster->updaterecords($id,$formArray);

			if ($response == true) {
				$this->session->set_flashdata('success', 'Customer Master Updated Successfully.');
			} else {
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
			}
			return redirect('admin/Customermaster/');
		}
	}

	public function update_contact($id)
	{	
		$formArray = array();			
		$formArray['customer_id'] = $this->input->post('customer_id');	
		$formArray['first_name'] = $this->input->post('first_name');
		$formArray['last_name'] = $this->input->post('last_name');
		$formArray['position_id'] = $this->input->post('position_id');
		$formArray['company_name'] = $this->input->post('company_name');
		$formArray['email'] = $this->input->post('email');
		$formArray['phone'] = $this->input->post('phone');
		$formArray['description'] = $this->input->post('description');
		$formArray['status'] = $this->input->post('status');

		$response = $this->customermaster->update_contact_records($id,$formArray);
		if ($response == true) {
			echo json_encode(array('success'=>true,'message'=>'Customer Contact Updated Successfully.'));
		} else {
			echo json_encode(array('success'=>false,'message'=>'Something went wrong. Please try again'));
		}
	}
	//Note master
	public function store_note()
	{	
		$formArray = array();			
		$formArray['customer_id'] = $this->input->post('customer_id');	
		$formArray['name'] = $this->input->post('name');
		$formArray['status'] = $this->input->post('status');
	
		$response = $this->customermaster->save_note_records($formArray);

		if ($response == true) {
			echo json_encode(array('success'=>true,'message'=>'Customer Note Added Successfully.'));
		} else {
			echo json_encode(array('success'=>false,'message'=>'Something went wrong. Please try again'));
		}	
	}
	public function edit_note($id)
	{	
		$data = $this->customermaster->getNote($id);
		echo json_encode($data);
	}
	public function update_note($id)
	{	
		$formArray = array();			
		$formArray['customer_id'] = $this->input->post('customer_id');	
		$formArray['name'] = $this->input->post('name');
		$formArray['status'] = $this->input->post('status');

		$response = $this->customermaster->update_note_records($id,$formArray);
		if ($response == true) {
			echo json_encode(array('success'=>true,'message'=>'Customer Note Updated Successfully.'));
		} else {
			echo json_encode(array('success'=>false,'message'=>'Something went wrong. Please try again'));
		}
	}
	public function delete_note($id,$customer_id)
	{
		$response = $this->customermaster->delete_note_records($id);

		if($response == true)
		{
			$this->session->set_flashdata('success', 'Customer Note Deleted Successfully.');
		}else{
			$this->sesssion->set_flashdata('error','Something went wrong. Please try again');
		}
		return redirect('admin/Customermaster/edit/'.$customer_id.'#customer-notes');
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
	public function delete_contact($id,$customer_id)
	{
		$response = $this->customermaster->delete_contact_records($id);

		if($response == true)
		{
			$this->session->set_flashdata('success', 'Customer Contact Deleted Successfully.');
		}else{
			$this->sesssion->set_flashdata('error','Something went wrong. Please try again');
		}
		return redirect('admin/Customermaster/edit/'.$customer_id.'#customer-contacts');
	}
}
