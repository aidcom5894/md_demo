<?php 

defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class LoadAction_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function loadLogin()
	{
		$this->load->view('developerLogin');
	}

	public function loadTerminal()
	{
		$this->load->view('terminal_execution/terminal_portal');
	}

	public function userRegistration()
	{
		$this->load->model('Action_Model');
		$this->Action_Model->registerNewUser();
	}

	public function userLogin()
	{
		$this->load->model('Action_Model');
		$this->Action_Model->userLogin();
	}
}

?>