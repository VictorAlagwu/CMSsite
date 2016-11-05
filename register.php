<?php include 'includes/db.php'
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
;?>
<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Registration Page-Victor CMS</title>
 <script src="admin/js/tinymce/tinymce.min.js"></script>
    <script src="admin/js/tinymce/script.js"></script>
	<link rel="icon" type="image/png" href="img/vimeo.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class="container">
 <div class="row">

 </div>
 	<div class="row">
 		<div class="col-xs-4"></div>
 		<div class="col-xs-4">
 		<?php
if (isset($_POST['register'])) {

	$user_name = $_POST['user_name'];
	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$user_image = "Image";
	$user_role = "User";
	$randsalt = "dgas";

	$user_query = "INSERT INTO users(user_name,";
	$user_query .= "user_firstname,user_lastname,user_password,";
	$user_query .= "user_email,user_image,user_role,";
	$user_query .= "randsalt)";
	$user_query .= " VALUES ('{$user_name}','{$user_firstname}','{$user_lastname}','{$user_password}','{$user_email}','{$user_image}','{$user_role}','{$randsalt}')";
	$run_query_user = mysqli_query($con, $user_query);
	if (!$run_query_user) {
		die("Error" . mysqli_error($run_query_user));
	} else {
		echo "Registered";
		header('Location:index.php');

	}

}

?>
 			<form method="POST" action="">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="user_name" class="form-control">
				</div>
				<div class="form-group">
					<label>FirstName</label>
					<input type="text" name="user_firstname" class="form-control">
				</div>
				<div class="form-group">
					<label>LastName</label>
					<input type="text" name="user_lastname" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="user_email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="user_password" class="form-control">
				</div>
<button type="submit" class="btn btn-primary" name="register">Register</button>
 			</form>

 		</div>
 		<div class="col-xs-4"></div>
 	</div>

 </div>
</body>
</html>