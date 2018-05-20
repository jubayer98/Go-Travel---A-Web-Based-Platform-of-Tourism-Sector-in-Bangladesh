<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agency extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AgencyModel');
	}

	public function agencyRegistrationInformation()

	{
		$data = array();
		$data['inputAgencyName'] = $this->input->post('inputAgencyName', true);
		$data['inputAgencyEmail'] = $this->input->post('inputAgencyEmail', true);
		$data['inputAgencyPassword'] = md5($this->input->post('inputAgencyPassword', true));
		$data['inputAgencyLicenseNumber'] = $this->input->post('inputAgencyLicenseNumber', true);

		$this->AgencyModel->InserdatUserInformation($data);

		redirect("welcome/agencyRegistrationConfirmation");
	}
}
