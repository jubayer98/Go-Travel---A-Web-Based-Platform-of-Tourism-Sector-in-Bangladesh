<?php

class ContributerLCModel extends CI_Model
{
	public function checkContributerLoginInfo($inputContributerEmail, $inputContributerPassword)
	{
		$inputContributerEmail = $this->input->post('inputContributerEmail', true);
		$inputContributerPassword = md5($this->input->post('inputContributerPassword', true));
		$this->db->select('*');
		$this->db->from('tbl_contributer');
		$this->db->where('inputContributerEmail', $inputContributerEmail);
		$this->db->where('inputContributerPassword', $inputContributerPassword);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}
