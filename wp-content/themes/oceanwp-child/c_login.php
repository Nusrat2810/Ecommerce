<?php

/* Template Name: Login */
get_header();

global $wpdb;

if(isset($_POST['login'])){
	$name = $wpdb->escape($_POST['name']);
	$password = $wpdb->escape($_POST['password']);
	$login_array = array();
	$login_array['name']=$name;
	$login_array['password']=$password;
	$res= wp_signon($login_array,true);
	if(!is_wp_error($res))
	{
		//echo "<script>window.location= '".site_url()."'</script>";
		echo "valid";
	}
	else{
		echo "Invalid";
	}

}

?>


<form method="POST">
	<label>Email</label>
	<input type="text" name="name" placeholder="User Name" id="name"/><br>
	<label>Password</label>
	<input type="password" name="password" placeholder="password" id="password" /><br>
	<input type="submit" name="login" value="Log In" id="loginsubmit"/>
	
</form>

<?php 
get_footer();
?>