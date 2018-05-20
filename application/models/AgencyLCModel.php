<?php

class AgencyLCModel extends CI_Model
{
	public function checkAgencyLoginInfo($inputAgencyEmail, $inputAgencyPassword)
	{
		$inputAgencyEmail = $this->input->post('inputAgencyEmail', true);
		$inputAgencyPassword = md5($this->input->post('inputAgencyPassword', true));
		$this->db->select('*');
		$this->db->from('tbl_agency');
		$this->db->where('inputAgencyEmail', $inputAgencyEmail);
		$this->db->where('inputAgencyPassword', $inputAgencyPassword);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
}
