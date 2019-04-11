<?php

$name = $wpdb->escape($_POST['name']);
	$email = $wpdb->escape($_POST['email']);
	$password = $wpdb->escape($_POST['password']);
	$wpdb->insert("wp_test", array('name' => $name, 'email' => $email, 'password' => $password) );
	header("location:http://localhost/wp_project/sign-up");

?>