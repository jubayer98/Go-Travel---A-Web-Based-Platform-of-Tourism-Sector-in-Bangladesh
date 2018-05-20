<?php

class TravelerAdminModel extends CI_Model
{
	public function insertproductinformation($data)
	{
		$this->db->insert('tbl_experience', $data);
	}

	public function listTravelerExperienceInformation($traveler_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_experience');
		$this->db->where('traveler_id', $traveler_id);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function updateTravelerExperience($experience_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_experience');
		$this->db->where('experience_id', $experience_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function updateTravelerExperienceInformationByTravelerAdmin($data)
	{
		$this->db->where('experience_id', $data['experience_id']);
		$this->db->update('tbl_experience', $data);
	}

	public function deleteTravelerExperienceInformationByTravelerAdmin($experience_id)
	{
		/*$this->db->select('*');
		$this->db->from('tbl_package');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;*/
		$this->db->where('experience_id', $experience_id);
		$this->db->delete('tbl_experience');
	}
}
