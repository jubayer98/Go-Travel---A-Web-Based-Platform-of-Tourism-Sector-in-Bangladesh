<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TravelerLC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('TravelerLCModel');
	}

	public function checkTravelerLogin()
	{
		$inputTravelerEmail = $this->input->post('inputTravelerEmail', true);
		$inputTravelerPassword = $this->input->post('inputTravelerPassword', true);
		$result = $this->TravelerLCModel->checkTravelerLoginInfo($inputTravelerEmail, $inputTravelerPassword);

		if($result)
		{
			$sdata = array();
			$sdata['traveler_id'] = $result->traveler_id;
			$sdata['inputTravelerFullName'] = $result->inputTravelerFullName;

			$this->session->set_userdata($sdata);

			redirect("TravelerAdminC",'refresh');
		}
		else
		{
			$sdata['messages'] = 'Please Enter Valid Traveler Email/Password';
			$this->session->set_userdata($sdata);
			redirect("Welcome/travelerLogin");
		}
	}

	public function travelerLogout()
	{
		$this->session->unset_userdata('traveler_id');
		redirect("Welcome/index", 'refresh');
	}
}
