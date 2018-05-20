<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traveler extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('TravelerModel');
	}

	public function travelerRegistrationInformation()

	{
		$data = array();
		$data['inputTravelerFullName'] = $this->input->post('inputTravelerFullName', true);
		$data['inputTravelerEmail'] = $this->input->post('inputTravelerEmail', true);
		$data['inputTravelerPassword'] = md5($this->input->post('inputTravelerPassword', true));

		$this->TravelerModel->InserdatUserInformation($data);

		redirect("welcome/travelerRegistrationConfirmation");
	}
}
