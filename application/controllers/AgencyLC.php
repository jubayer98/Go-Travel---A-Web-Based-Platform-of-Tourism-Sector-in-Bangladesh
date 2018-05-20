<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgencyLC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('AgencyLCModel');
	}

	public function checkAgencyLogin()
	{
		$inputAgencyEmail = $this->input->post('inputAgencyEmail', true);
		$inputAgencyPassword = $this->input->post('inputAgencyPassword', true);
		$result = $this->AgencyLCModel->checkAgencyLoginInfo($inputAgencyEmail, $inputAgencyPassword);

		if($result)
		{
			$sdata = array();
			$sdata['agency_id'] = $result->agency_id;
			$sdata['inputAgencyName'] = $result->inputAgencyName;
			$sdata['inputAgencyLicenseNumber'] = $result->inputAgencyLicenseNumber;

			$this->session->set_userdata($sdata);

			redirect("AgencyAdminC",'refresh');
		}
		else
		{
			$sdata['messages'] = 'Please Enter Valid Agency Email/Password';
			$this->session->set_userdata($sdata);
			redirect("Welcome/agencyLogin");
		}
	}

	public function agencyLogout()
	{
		$this->session->unset_userdata('agency_id');
		redirect("Welcome/index", 'refresh');
	}
}
