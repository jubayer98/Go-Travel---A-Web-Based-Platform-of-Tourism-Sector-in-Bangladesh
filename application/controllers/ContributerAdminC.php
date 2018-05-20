<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContributerAdminC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ContributerAdminModel');

	}

	public function index()
	{
		$this->load->View('contributerAdminPanel/homeContributerAdmin');
	}

	public function saveContributionThingInformation()
	{
		$data = array();
		$data['contributer_id'] = $this->session->userdata('contributer_id', true);
		$data['inputTouristPlaceName'] = $this->input->post('inputTouristPlaceName', true);
		$data['inputPlaceDetails'] = $this->input->post('inputPlaceDetails', true);
		$data['inputContributionDivision'] = $this->input->post('inputContributionDivision', true);
		$data['inputCommunicationDetails'] = $this->input->post('inputCommunicationDetails', true);

		if($_FILES['inputTouristPlacePicture']['size'] <= 10000000)
		{
			$result = $this->do_upload('inputTouristPlacePicture');
			if($result[upload_data])
			{
				$data['inputTouristPlacePicture'] = 'resource/inputTouristPlacePicture/'.$result['upload_data']['file_name'];
			}
		}
		else
		{
			//does not working
		}

		$this->ContributerAdminModel->insertproductinformation($data);

		$sdata = array();
		$sdata['save_product'] = 'Your Contribution Record Has Been Successfully Made.';
		$this->session->set_userdata($sdata);
		redirect("ContributerAdminC/index");
	}

	function do_upload($image_file)
	{
		$config['upload_path'] = './resource/inputTouristPlacePicture/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000000';
		$config['max_width'] = '10000000';
		$config['max_height'] = '768000';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload($image_file))
		{
			$error = array('error' => $this->upload->display_errors(), 'upload_data' => '');
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data(), 'error' => '');
			return $data;
		}
	}

	public function viewContributionThingInformation()
	{
		$contributer_id = $this->session->userdata('contributer_id');
		$data = array();
		$data['viewContributionThingInfo'] = $this->ContributerAdminModel->listContributionThingInformation($contributer_id);

		$this->load->view('contributerAdminPanel/viewContributionThingInfo', $data);
	}

	public function createContributionThing()
	{
		$this->load->View('contributerAdminPanel/homeContributerAdmin');
	}

	public function updateContributionThingInformation($contribution_id)
	{
		$data = array();
		$data['updateContributionThingInformation'] = $this->ContributerAdminModel->updateContributionThing($contribution_id);
		$this->load->View('contributerAdminPanel/update_contributer_thing', $data);
	}


	public function updatedContributionThingInformation()
	{
		$data = array();
		$data['contribution_id'] = $this->input->post('contribution_id', true);
		$data['inputTouristPlaceName'] = $this->input->post('inputTouristPlaceName', true);
		$data['inputPlaceDetails'] = $this->input->post('inputPlaceDetails', true);
		$data['inputContributionDivision'] = $this->input->post('inputContributionDivision', true);
		$data['inputCommunicationDetails'] = $this->input->post('inputCommunicationDetails', true);

		if($_FILES['inputTouristPlacePicture']['size'] <= 10000000)
		{
			$result = $this->do_upload('inputTouristPlacePicture');
			if($result[upload_data])
			{
				$data['inputTouristPlacePicture'] = 'resource/inputTouristPlacePicture/'.$result['upload_data']['file_name'];
			}
		}
		else
		{
			//does not working
		}

		$this->ContributerAdminModel->updateContributionThingInformationByContributerAdmin($data);

		/*$sdata = array();
		$sdata['save_product'] = 'Your information has been successfully updated. To view all of your tour package details please choose the Tour Package option from top menu.';
		$this->session->set_userdata($sdata);*/
		redirect("ContributerAdminC/viewContributionThingInformation");
	}

	public function deleteContributionThingInformation($contribution_id)
	{
		$this->ContributerAdminModel->deleteContributionThingInformationByContributerAdmin($contribution_id);
		redirect("ContributerAdminC/viewContributionThingInformation");
	}


}
