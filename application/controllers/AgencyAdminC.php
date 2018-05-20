<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgencyAdminC extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AgencyAdminModel');

	}

	public function index()
	{
		$this->load->View('agencyAdminPanel/homeAgencyAdmin');
	}

	public function saveTourPackageInformation()
	{
		$data = array();
		$data['agency_id'] = $this->session->userdata('agency_id', true);
		$data['inputPackageTitle'] = $this->input->post('inputPackageTitle', true);
		$data['inputPackageDetails'] = $this->input->post('inputPackageDetails', true);
		$data['inputTourDivision'] = $this->input->post('inputTourDivision', true);
		$data['inputPackagePrice'] = $this->input->post('inputPackagePrice', true);
		$data['inputPackageContactNo'] = $this->input->post('inputPackageContactNo', true);

		if($_FILES['inputPackageBannerFile']['size'] <= 10000000)
		{
			$result = $this->do_upload('inputPackageBannerFile');
			if($result[upload_data])
			{
				$data['inputPackageBannerFile'] = 'resource/inputPackageBannerFile/'.$result['upload_data']['file_name'];
			}
		}
		else
		{
			//does not working
		}

		$this->AgencyAdminModel->insertproductinformation($data);

		$sdata = array();
		$sdata['save_product'] = 'Your Tour Package Has Been Successfully Created.';
		$this->session->set_userdata($sdata);
		redirect("AgencyAdminC/index");
	}

	function do_upload($image_file)
	{
		$config['upload_path'] = './resource/inputPackageBannerFile/';
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

	/**
	 *
	 */
	public function viewTourPackageInformation()
	{
		$agency_id = $this->session->userdata('agency_id');
		$data = array();
		$data['viewTourPackageInfo'] = $this->AgencyAdminModel->listTourPackageInformation($agency_id);

		$this->load->view('agencyAdminPanel/viewTourPackageInfo', $data);
	}

	public function createTourPackage()
	{
		$this->load->View('agencyAdminPanel/homeAgencyAdmin');
	}

	public function updateTourPackageInformation($package_id)
	{
		$data = array();
		$data['updateTourPackageInformation'] = $this->AgencyAdminModel->updateTourPackage($package_id);
		$this->load->View('agencyAdminPanel/update_tour_package', $data);
	}


	public function updatedTourPackageInformation()
	{
		$data = array();
		$data['package_id'] = $this->input->post('package_id', true);
		$data['inputPackageTitle'] = $this->input->post('inputPackageTitle', true);
		$data['inputPackageDetails'] = $this->input->post('inputPackageDetails', true);
		$data['inputTourDivision'] = $this->input->post('inputTourDivision', true);
		$data['inputPackagePrice'] = $this->input->post('inputPackagePrice', true);
		$data['inputPackageContactNo'] = $this->input->post('inputPackageContactNo', true);

		if($_FILES['inputPackageBannerFile']['size'] <= 10000000)
		{
			$result = $this->do_upload('inputPackageBannerFile');
			if($result[upload_data])
			{
				$data['inputPackageBannerFile'] = 'resource/inputPackageBannerFile/'.$result['upload_data']['file_name'];
			}
		}
		else
		{
			//does not working
		}

		$this->AgencyAdminModel->updateTourPackageInformationByAgencyAdmin($data);

		/*$sdata = array();
		$sdata['save_product'] = 'Your information has been successfully updated. To view all of your tour package details please choose the Tour Package option from top menu.';
		$this->session->set_userdata($sdata);*/
		redirect("AgencyAdminC/viewTourPackageInformation");
	}

	public function deleteTourPackageInformation($package_id)
	{
		$this->AgencyAdminModel->deleteTourPackageInformationByAgencyAdmin($package_id);
		redirect("AgencyAdminC/viewTourPackageInformation");
	}

}
