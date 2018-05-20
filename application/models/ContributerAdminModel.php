<?php

class ContributerAdminModel extends CI_Model
{
	public function insertproductinformation($data)
	{
		$this->db->insert('tbl_contribution', $data);
	}

	public function listContributionThingInformation($contributer_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_contribution');
		$this->db->where('contributer_id', $contributer_id);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function updateContributionThing($contribution_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_contribution');
		$this->db->where('contribution_id', $contribution_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function updateContributionThingInformationByContributerAdmin($data)
	{
		$this->db->where('contribution_id', $data['contribution_id']);
		$this->db->update('tbl_contribution', $data);
	}

	public function deleteContributionThingInformationByContributerAdmin($contribution_id)
	{
		/*$this->db->select('*');
		$this->db->from('tbl_package');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;*/
		$this->db->where('contribution_id', $contribution_id);
		$this->db->delete('tbl_contribution');
	}
}
