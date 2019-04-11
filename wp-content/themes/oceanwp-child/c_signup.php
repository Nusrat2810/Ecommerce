<?php

/* Template Name: Signup */
get_header();
echo "<script>console.log('hi1')</script>";
global $wpdb;
if($_POST['signupsubmit']){


	//echo "<script>console.log('hi')</script>";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dd = $wpdb->insert('wp_test', array('name' => $name, 'email' => $email, 'password' => $password) );



	// var_dump($dd);
	
	//header("location:http://localhost/wp_project/login/");
	//$table_name = $wpdb->prefix . "test";
	//$wpdb->insert($table_name, array('name' => $name, 'email' => $email, 'password' => $password) );
	//echo "success";
	//wp_create_user($name,$password,$email);
	echo "success";
	//exit();
}
/*if($_POST['signupsubmit']){
if($dd = $wpdb->insert('wp_test',
			 array(
			 	'name' => $name,
			 	'email' => $email,
			 	'password' => $password
			 )
			 )==false) wp_die('failed');
else{
	echo "success";
}
}*/



?>
<!--<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>-->


<div class="signupform">
<form method="POST" action="" enctype="multipart/formdata">
	<label>Name:</label>
	<input type="text" name="name" id="name">
	<label>Email:</label>
	<input type="text" name="email" id="email">
	<label>Password:</label>
	<input type="text" name="password" id="password">	
	<input type="submit" name="signupsubmit" value="submit">
</form>


</div>

</body>
</html>






<?php 
get_footer();
?>

