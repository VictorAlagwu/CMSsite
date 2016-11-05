<?php include 'db.php';?>
<?php session_start();?>
<?php
if (isset($_POST['login'])) {
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	mysqli_real_escape_string($con, $user_name);
	mysqli_real_escape_string($con, $user_password);

	$query = "SELECT * FROM users WHERE user_name='{$user_name}' AND user_password='{$user_password}'";
	$login_run_query = mysqli_query($con, $query);
	if (!$con) {
		die('Error connecting to database' . mysqli_error($con));
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

	}
	if ($user_name !== $us_user && $user_password !== $us_password) {
		header('Location: ../index.php');
	} elseif ($user_name == $us_user && $user_password == $us_password) {
		$_SESSION['id'] = $us_id;
		$_SESSION['username'] = $us_user;
		$_SESSION['firstname'] = $us_firstname;
		$_SESSION['lastname'] = $us_lastname;
		$_SESSION['email'] = $us_email;
		$_SESSION['role'] = $us_role;
		$_SESSION['image'] = $us_image;

		header('Location: ../admin');
	} else {
		header('Location: ../index.php');
	}
}
?>
<!-- // 	if (empty($user_name) && !empty($user_password)) {
	// 		echo "Please enter a Username";
	// 	} elseif (empty($user_password) && !empty($user_name)) {
	// 		echo "Please enter a Password";
	// 	} elseif (!$run_query) {

// 		die("Error" . mysqli_error($con));
	// 	} else {
	// 		echo "Enter Username and password";
	// 	}
	// -->