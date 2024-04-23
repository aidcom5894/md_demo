
<?php 

if(!isset($_SESSION['loggedinUser']))
{
	session_unset();
	unset($_SESSION['loggedinUser']);
	session_destroy();
	redirect(base_url());
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<title>HUD | Form Elements</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content>
<meta name="author" content>

<link href="<?php echo base_url(); ?>modules/terminal_exe/assets/css/vendor.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>modules/terminal_exe/assets/css/app.min.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>modules/terminal_exe/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet">

</head>
<body>
