<?php

class ContributerModel extends CI_Model
{
	public function InserdatUserInformation($data)
	{
		$this->db->insert('tbl_contributer', $data);
	}
}