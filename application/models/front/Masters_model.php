<?php
class Masters_model extends CI_model{

	public $db_name;

	public function __construct()
	{
		parent::__construct();
		$this->db_name = 'tb_master';
	}

	function all()
	{
		$data = $this->db->get($this->db_name)->result_array();
		return $data;
	}
	function saverecords($formArray)
	{
		 $this->db->insert($this->db_name,$formArray);
		 return true;
	}
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->db_name);
		return true;
	}
	function getMasters($id)
	{
		$data = $this->db->where('id',$id)->get($this->db_name)->row();
		return $data;
	}
	function updaterecords($id,$formArray)
	{
		$this->db->where('id',$id);
		$this->db->update($this->db_name,$formArray);
		return true;
	}
	
	
	
}	 
 ?>
