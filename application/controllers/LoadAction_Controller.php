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
}

?>