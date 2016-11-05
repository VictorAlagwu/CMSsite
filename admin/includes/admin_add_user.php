<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
//<<<<<<<<<<<<<<<<<<<<<<<<----ADD user--->>>>>>>>>>>>>>>>>>>>>>>>>>>>//

if (isset($_POST['create_user'])) {

//---ASSIGNING VARIABLES-----
	$user_name = $_POST['user_name'];
	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];

	$user_image = $_FILES['user_image']['name'];
	$user_image_temp = $_FILES['user_image']['tmp_name'];

	$user_password = $_POST['user_password'];
	$user_email = $_POST['user_email'];
	$user_role = $_POST['user_role'];
	$randsalt = "dgas";
	// $user_comment_count = 4;

//---ASSIGNING VARIABLES-----
	move_uploaded_file($user_image_temp, "../img/$user_image"); //--MOVING UPLOADED FILES TO TEMPORARY DIRECTORY--

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
	//
	//-------QUERY TO INSERT DATA INTO user TABLE---------
	$user_query = "INSERT INTO users(user_name,";
	$user_query .= "user_firstname,user_lastname,user_password,";
	$user_query .= "user_email,user_image,user_role,";
	$user_query .= "randsalt)";
	$user_query .= " VALUES ('{$user_name}','{$user_firstname}','{$user_lastname}','{$user_password}','{$user_email}','{$user_image}','{$user_role}','{$randsalt}')";
	$create_user_query = mysqli_query($con, $user_query);
	if (!$create_user_query) {
		die("Error in calling query" . mysqli_error($con));
	}
	echo "User Created Successfully";
}
?>
<form role="form" action="" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label for="user_title">User Name</label>
		<input type="text" name="user_name" class="form-control" required>
	</div>



	<div class="form-group">
		<label for="user_author">FirstName</label>
		<input type="text" name="user_firstname" class="form-control" required>
	</div>

	<div class="form-group">
		<label for="user_status">LastName</label>
		<input type="text" name="user_lastname" class="form-control" required>
	</div>

	<div class="form-group">
		<label for="user_image">Image</label>
		<input type="file" name="user_image" required>
	</div>
	<div class="input-group">
		<select class="form-control" name="user_role" id="">
		    <label for="user_role">Role</label>
		   <?php

echo "<option value='Admin'>Admin</option>";
echo "<option value='User'>User</option>";
?>

	    </select>
	</div>
	<div class="form-group">
		<label for="user_tag">Email</label>
		<input type="email" name="user_email" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="user_tag">Password</label>
		<input type="password" name="user_password" class="form-control" required>
	</div>


<button type="submit" name="create_user" class="btn btn-primary" value="Add User">Add User</button>

</form>
