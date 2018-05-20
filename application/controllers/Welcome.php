<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function contributerRegistration()
	{
		$this->load->view('contributerRegistration');
	}

	public function travelerRegistration()
	{
		$this->load->view('travelerRegistration');
	}

	public function agencyRegistration()
	{
		$this->load->view('agencyRegistration');
	}

	public function contributerLogin()
	{
		$this->load->view('contributerLogin');
	}

	public function travelerLogin()
	{
		$this->load->view('travelerLogin');
	}

	public function agencyLogin()
	{
		$this->load->view('agencyLogin');
	}

	public function agencyRegistrationConfirmation()
	{
		$this->load->view('agencyRegistrationConfirmation');
	}

	public function travelerRegistrationConfirmation()
	{
		$this->load->view('travelerRegistrationConfirmation');
	}

	public function contributerRegistrationConfirmation()
	{
		$this->load->view('contributerRegistrationConfirmation');
	}

    public function go()
    {
        $this->load->view('go');
    }

    public function travel()
    {
        $this->load->view('travel');
    }

    public function enjoy()
    {
        $this->load->view('enjoy');
    }

    public function result()
    {
        $this->load->view('result');
    }

}
