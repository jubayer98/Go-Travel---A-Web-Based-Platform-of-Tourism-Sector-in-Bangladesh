<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contributer extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ContributerModel');
	}

	public function contributerRegistrationInformation()

	{
		$data = array();
		$data['inputContributerFullName'] = $this->input->post('inputContributerFullName', true);
		$data['inputContributerEmail'] = $this->input->post('inputContributerEmail', true);
		$data['inputContributerPassword'] = md5($this->input->post('inputContributerPassword', true));
		$data['inputContributerLocation'] = $this->input->post('inputContributerLocation', true);

		$this->ContributerModel->InserdatUserInformation($data);

		redirect("welcome/contributerRegistrationConfirmation");
	}
}
