<?php

class TravelerLCModel extends CI_Model
{
	public function checkTravelerLoginInfo($inputTravelerEmail, $inputTravelerPassword)
	{
		$inputTravelerEmail = $this->input->post('inputTravelerEmail', true);
		$inputTravelerPassword = md5($this->input->post('inputTravelerPassword', true));
		$this->db->select('*');
		$this->db->from('tbl_traveler');
		$this->db->where('inputTravelerEmail', $inputTravelerEmail);
		$this->db->where('inputTravelerPassword', $inputTravelerPassword);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}
