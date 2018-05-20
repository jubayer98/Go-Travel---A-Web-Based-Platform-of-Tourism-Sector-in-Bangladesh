<?php

class AgencyAdminModel extends CI_Model
{
	public function insertproductinformation($data)
	{
		$this->db->insert('tbl_package', $data);
	}

	public function listTourPackageInformation($agency_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_package');
		$this->db->where('agency_id', $agency_id);
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;
	}

	public function updateTourPackage($package_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_package');
		$this->db->where('package_id', $package_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function updateTourPackageInformationByAgencyAdmin($data)
	{
		$this->db->where('package_id', $data['package_id']);
		$this->db->update('tbl_package', $data);
	}

	public function deleteTourPackageInformationByAgencyAdmin($package_id)
	{
		/*$this->db->select('*');
		$this->db->from('tbl_package');
		$query_result = $this->db->get();
		$result = $query_result->result();
		return $result;*/
		$this->db->where('package_id', $package_id);
		$this->db->delete('tbl_package');
	}



}
