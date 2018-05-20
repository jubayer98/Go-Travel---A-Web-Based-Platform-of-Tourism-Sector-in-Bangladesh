<?php

class AgencyModel extends CI_Model
{
	public function InserdatUserInformation($data)
	{
		$this->db->insert('tbl_agency', $data);
	}
}