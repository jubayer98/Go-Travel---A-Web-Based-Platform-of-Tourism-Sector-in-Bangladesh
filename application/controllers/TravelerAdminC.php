<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TravelerAdminC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TravelerAdminModel');

	}

	public function index()
	{
		$this->load->View('travelerAdminPanel/homeTravelerAdmin');
	}

	public function saveTravelerExperienceInformation()
	{
		$data = array();
		$data['traveler_id'] = $this->session->userdata('traveler_id', true);
		$data['inputExperienceTitle'] = $this->input->post('inputExperienceTitle', true);
		$data['inputExperienceDetails'] = $this->input->post('inputExperienceDetails', true);
		$data['inputTravelingDivision'] = $this->input->post('inputTravelingDivision', true);
		$data['inputTravelingThingsToRemember'] = $this->input->post('inputTravelingThingsToRemember', true);
		$data['inputTravelingPossibleExpense'] = $this->input->post('inputTravelingPossibleExpense', true);

		if($_FILES['inputTravelMomentExperiencePicture']['size'] <= 10000000)
		{
			$result = $this->do_upload('inputTravelMomentExperiencePicture');
			if($result[upload_data])
			{
				$data['inputTravelMomentExperiencePicture'] = 'resource/inputTravelMomentExperiencePicture/'.$result['upload_data']['file_name'];
			}
		}
		else
		{
			//does not working
		}

		$this->TravelerAdminModel->insertproductinformation($data);

		$sdata = array();
		$sdata['save_product'] = 'Your Travel Experience Has Been Successfully Shared.';
		$this->session->set_userdata($sdata);
		redirect("TravelerAdminC/index");
	}

	function do_upload($image_file)
	{
		$config['upload_path'] = './resource/inputTravelMomentExperiencePicture/';
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

	public function viewTravelerExperienceInformation()
	{
		$traveler_id = $this->session->userdata('traveler_id');
		$data = array();
		$data['viewTravelerExperienceInfo'] = $this->TravelerAdminModel->listTravelerExperienceInformation($traveler_id);

		$this->load->view('travelerAdminPanel/viewTravelerExperienceInfo', $data);
	}

	public function createTravelerExperience()
	{
		$this->load->View('travelerAdminPanel/homeTravelerAdmin');
	}

	public function updateTravelerExperienceInformation($experience_id)
	{
		$data = array();
		$data['updateTravelerExperienceInformation'] = $this->TravelerAdminModel->updateTravelerExperience($experience_id);
		$this->load->View('travelerAdminPanel/update_traveler_experience', $data);
	}


	public function updatedTravelerExperienceInformation()
	{
		$data = array();
		$data['experience_id'] = $this->input->post('experience_id', true);
		$data['inputExperienceTitle'] = $this->input->post('inputExperienceTitle', true);
		$data['inputExperienceDetails'] = $this->input->post('inputExperienceDetails', true);
		$data['inputTravelingDivision'] = $this->input->post('inputTravelingDivision', true);
		$data['inputTravelingThingsToRemember'] = $this->input->post('inputTravelingThingsToRemember', true);
		$data['inputTravelingPossibleExpense'] = $this->input->post('inputTravelingPossibleExpense', true);

		if($_FILES['inputTravelMomentExperiencePicture']['size'] <= 10000000)
		{
			$result = $this->do_upload('inputTravelMomentExperiencePicture');
			if($result[upload_data])
			{
				$data['inputTravelMomentExperiencePicture'] = 'resource/inputTravelMomentExperiencePicture/'.$result['upload_data']['file_name'];
			}
		}
		else
		{
			//does not working
		}

		$this->TravelerAdminModel->updateTravelerExperienceInformationByTravelerAdmin($data);

		/*$sdata = array();
		$sdata['save_product'] = 'Your information has been successfully updated. To view all of your tour package details please choose the Tour Package option from top menu.';
		$this->session->set_userdata($sdata);*/
		redirect("TravelerAdminC/viewTravelerExperienceInformation");
	}

	public function deleteTravelerExperienceInformation($experience_id)
	{
		$this->TravelerAdminModel->deleteTravelerExperienceInformationByTravelerAdmin($experience_id);
		redirect("TravelerAdminC/viewTravelerExperienceInformation");
	}


}
