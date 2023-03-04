<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sourcecategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/Sourcecategory_model','soucat');
		$this->form_validation->set_error_delimiters('<div class="bg-red-dark m-1 rounded-sm shadow-xl text-center line-height-xs font-10 py-1 text-uppercase mb-0 font-700">', '</div>');

	}

	public function index()
	{		
		$data['page_name'] = 'source_category_view';
		$data['sourcategories'] = $this->soucat->all();
		
		$this->load->view('admin/index',$data);

	}
	public function all()
	{
		$category = $this->soucat->all();
		$result = array('data'=>[]);
		$result = array();
		$i=1;
		foreach ($category as $value) { 
			$button = '<a href="'.base_url('admin/sourcecategory/edit/' .$value['id']).'" class="action-icon edit-btn" data-id="'.$value['id'].'" data-bs-toggle="modal" data-bs-target="#sourcecategoryedit-modal"><i class="mdi mdi-square-edit-outline"></i></a>
			<a href="'.base_url('admin/sourcecategory/delete/' .$value['id']).'" class="action-icon delete-btn"> <i class="mdi mdi-delete"></i></a>';
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
	
	public function store()
	{

		$this->form_validation->set_rules('name', 'Source Category Name', 'required');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$formArray = array();
			$formArrayoptions = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['status'] = $this->input->post('status');
			$formArrayoptions = $this->input->post('option[]');
			$response = $this->soucat->saverecords($formArray,$formArrayoptions);

			if ($response == true) {
				$this->session->set_flashdata('success', 'Source category Added Successfully.');
			} else {
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
			}
			return redirect('admin/sourcecategory/');
		}
	}

	public function edit($id)
	{
		$data = $this->soucat->getSourcecategory($id);
		$data->option_data= $this->db->get_where('source_option_master',array('source_cat_id'=>$id))->result_array();

		echo json_encode($data);
	}

	public function update($id)
	{	
		$formArray = array();
		$formArrayoptions = array();
		$formArray['name'] = $this->input->post('name');
		$formArray['status'] = $this->input->post('status');
		$formArrayoptions = $this->input->post('option[]');
		$response = $this->soucat->updaterecords($id,$formArray,$formArrayoptions);
		if ($response == true) {
			echo json_encode(array('success'=>true,'message'=>'Source category Updated Successfully.'));
		} else {
			echo json_encode(array('success'=>false,'message'=>'Something went wrong. Please try again'));
		}
	}
	
	public function delete($id)
	{
		$response = $this->soucat->delete($id);

		if($response == true)
		{
			$this->session->set_flashdata('success', 'Source category Deleted Successfully.');
		}else{
			$this->sesssion->set_flashdata('error','Something went wrong. Please try again');
		}
		return redirect('admin/sourcecategory/');
		

	}
	
}
