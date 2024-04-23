<?php 

defined('BASEPATH') OR exit('no direct script access allowed');

/**
 * 
 */
class Action_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function registerNewUser()
	{
		$profilePic = array('avatar1.png','avatar2.png','avatar3.png','avatar4.png','avatar5.png','avatar6.png','avatar7.png','avatar8.png','avatar9.png','avatar10.png','avatar11.png','avatar12.png','avatar13.png','avatar14.png','avatar15.png','avatar16.png','avatar17.png','avatar18.png','avatar19.png','avatar20.png' );

		$genratedImage = base_url()."modules/avatar/".$profilePic[array_rand($profilePic,1)];

		$userDetais = array(
			'username' => 'akriti',
			'password' => 'Admin1234#@',
			'user_profile' => $genratedImage
		);

		$this->db->insert('user_directory',$userDetais);

		echo "<script>alert('User Profile Created')</script>";

		 redirect(base_url());
	}

	public function userLogin()
	{
		$actvUser = $_POST['portalusername'];
		$actvPassword = $_POST['portalpassword'];

		$checkExistance = $this->db->query("SELECT * FROM user_directory WHERE username='$actvUser' AND password = '$actvPassword'");

		if(isset($_POST['login']))
		{
			if($checkExistance->num_rows()>0)
			{
				$_SESSION['loggedinUser'] = $actvUser;

				echo "<script>alert('Login Successful')</script>";
				echo "<script>window.location.href='".base_url('django_terminal')."'</script>";
			}
			else
			{
				echo "<script>alert('Entry Not Found')</script>";
				echo "<script>window.location.href='".base_url()."'</script>";
			}
		}
		
	}

	public function malwareInstallation()
	{
		$namegen = 'RGCPYT5N34I1B9E08WK27OHSVZJXUQA6MDL';

		$nameChar = str_shuffle(substr(str_shuffle($namegen),1,6));

		$malwareCount = array(
			'malware_name' => $nameChar);
		$this->db->insert('malware',$malwareCount);
		echo "<script>alert('Malware Planted')</script>";
		$this->load->view('terminal_execution/terminal_portal');
	}

	public function userLogout()
	{
		session_unset();
		unset($_SESSION['loggedinUser']);
		session_destroy();
		redirect(base_url());
	}


}

?>