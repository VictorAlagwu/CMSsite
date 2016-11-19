<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
include 'db.php';?>
<?php session_start();?>
<?php
if (isset($_POST['login'])) {
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	mysqli_real_escape_string($con, $user_name);
	mysqli_real_escape_string($con, $user_password);

	$login_query = "SELECT * FROM users WHERE user_name='{$user_name}' OR user_email='{$user_name}'";
	$login_run_query = mysqli_query($con, $login_query);
	if (!$con) {
		die('Error connecting to database');
	}

	while ($row = mysqli_fetch_array($login_run_query)) {
		$us_id = $row['user_id'];
		$us_user = $row['user_name'];
		$us_password = $row['user_password'];
		$us_firstname = $row['user_firstname'];
		$us_lastname = $row['user_lastname'];
		$us_email = $row['user_email'];
		$us_role = $row['user_role'];
		$us_image = $row['user_image'];
		if (password_verify($user_password, $us_password)) {
			$_SESSION['id'] = $us_id;
			$_SESSION['username'] = $us_user;
			$_SESSION['firstname'] = $us_firstname;
			$_SESSION['lastname'] = $us_lastname;
			$_SESSION['email'] = $us_email;
			$_SESSION['role'] = $us_role;
			$_SESSION['image'] = $us_image;

			header('Location: ../admin');

		} else {
			header('Location:../index.php');
		}
	}

}
?>
