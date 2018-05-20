<?php

class TravelerModel extends CI_Model
{
	public function InserdatUserInformation($data)
	{
		$this->db->insert('tbl_traveler', $data);
	}
}