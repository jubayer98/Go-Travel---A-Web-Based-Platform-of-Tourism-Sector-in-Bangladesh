<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContributerLC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('ContributerLCModel');
	}

	public function checkContributerLogin()
	{
		$inputContributerEmail = $this->input->post('inputContributerEmail', true);
		$inputContributerPassword = $this->input->post('inputContributerPassword', true);
		$result = $this->ContributerLCModel->checkContributerLoginInfo($inputContributerEmail, $inputContributerPassword);

		if($result)
		{
			$sdata = array();
			$sdata['contributer_id'] = $result->contributer_id;
			$sdata['inputContributerFullName'] = $result->inputContributerFullName;
			$sdata['inputContributerLocation'] = $result->inputContributerLocation;

			$this->session->set_userdata($sdata);

			redirect("ContributerAdminC",'refresh');
		}
		else
		{
			$sdata['messages'] = 'Please Enter Valid Contributor Email/Password';
			$this->session->set_userdata($sdata);
			redirect("Welcome/contributerLogin");
		}
	}

	public function contributerLogout()
	{
		$this->session->unset_userdata('contributer_id');
		redirect("Welcome/index", 'refresh');
	}
}
