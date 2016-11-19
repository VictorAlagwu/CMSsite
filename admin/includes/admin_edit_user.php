<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
//<<<<<<<<<<<<<<<<<<<<<<<<----ADD user--->>>>>>>>>>>>>>>>>>>>>>>>>>>>//

if (isset($_SESSION['role'])) {
	if ($_SESSION['role'] !== 'Admin') {
		header('Location: ./index.php');

	}
}
if (isset($_GET['u_id'])) {
	$user_id = $_GET['u_id'];
} else {
	echo "Wrong User ID";
}

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
//---------QUERY TO CALL ALL THE DATAS IN userS TABLE----
error_reporting(0);
$query = "SELECT * FROM users WHERE user_id='{$user_id}'";
$run_query = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run_query)) {
	$user_name = $row['user_name'];
	$user_firstname = $row['user_firstname'];
	$user_lastname = $row['user_lastname'];
	$user_email = $row['user_email'];
	$user_password = $row['user_password'];

	$user_image = $row['user_image'];
	$user_role = $row['user_role'];
}
//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
//
if (isset($_POST['update_user'])) {
	$user_name = $_POST['user_name'];
	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$password = password_hash($user_password, PASSWORD_DEFAULT);
	$user_image = $_FILES['user_image']['name'];
	$user_image_temp = $_FILES['user_image']['tmp_name'];

	$user_role = $_POST['user_role'];

}
//---ASSIGNING VARIABLES-----

//--MOVING UPLOADED FILES TO TEMPORARY DIRECTORY--

move_uploaded_file($user_image_temp, "../img/$user_image");
//-------QUERY TO RELOAD IMAGE IN EDIT AND UPDATE PAGE
if (empty($user_image)) {
	$query = "SELECT * FROM users WHERE user_id=$user_id";
	$image_query = mysqli_query($con, $query);
	while ($row = mysqli_fetch_array($image_query)) {
		$user_image = $row['user_image'];
	}
}
//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
$update_query = "UPDATE users SET user_name='{$user_name}',";
$update_query .= "user_firstname='{$user_firstname}',";
$update_query .= "user_lastname='{$user_lastname}',user_password='{$password}',user_email='{$user_email}',";
$update_query .= "user_image='{$user_image}', user_role='{$user_role}'";
$update_query .= " WHERE user_id={$user_id}";
$run_update_query = mysqli_query($con, $update_query);
//-------QUERY TO INSERT DATA INTO user TABLE---------
?>
<form role="form" action="" method="POST" enctype="multipart/form-data">

<div class="form-group">
		<label for="user_title">User Name</label>
		<input type="text" name="user_name" class="form-control" value="<?php echo $user_name; ?>" required>
	</div>



	<div class="form-group">
		<label for="user_author">FirstName</label>
		<input type="text" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>" required>
	</div>

	<div class="form-group">
		<label for="user_status">LastName</label>
		<input type="text" name="user_lastname" class="form-control" value="<?php echo $user_lastname; ?>" required>
	</div>
		<div class="input-group">
		<select class="form-control" name="user_role" id="">
		    <label for="user_role">Role</label>
		    <option value='User'><?php echo $user_role; ?></option>
		    <?php
if ($user_role == "Admin") {
	echo "<option value='User'>User</option>";
} else {
	echo "<option value='Admin'>Admin</option>";
}
?>



	    </select>
	</div>
		<div class="form-group">
		<label for="post_image">User Image</label>
		<img class="img-responsive" width="200" src="../img/<?php echo $user_image; ?>" alt="Photo">
		<input type="file" name="user_image">
	</div>
	<div class="form-group">
		<label for="user_tag">Email</label>
		<input type="email" name="user_email" class="form-control" value="<?php echo $user_email; ?>" required>
	</div>
	<div class="form-group">
		<label for="user_tag">Password</label>
		<input type="password" name="user_password" class="form-control" value="<?php echo $user_password; ?>" required>
	</div>
<hr>


<button type="submit" name="update_user" class="btn btn-primary" value="Update User">Update User</button>

</form>
