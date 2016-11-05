<!-- @author 'Victor Alagwu';
//   @project 'Simple Content Management System';
//   @date    '0ctober 2016'; -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>First-Name</th>
                        <th>Last-Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>User Role</th>
                        <th>RandSalt</th>
                        <th>Change to Admin</th>
                        <th>Change to Subscriber</th>
                        <th>Edit</th>
                        <th>Delete</th>


                    </tr>
                </thead>
                <tbody>

                    <?php

$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($run_query)) {
	$user_id = $row['user_id'];
	$user_name = $row['user_name'];
	$user_firstname = $row['user_firstname'];
	$user_lastname = $row['user_lastname'];
	$user_password = $row['user_password'];
	$date = date('D/M/Y,h:ia');
	$user_image = $row['user_image'];
	$user_email = $row['user_email'];
	$user_role = $row['user_role'];
	$randsalt = $row['randsalt'];

	echo "<tr>";
	echo "<td>{$user_id}</td>";
	echo "<td>{$user_name}</td>";
	echo "<td>{$user_firstname}</td>";
	echo "<td>{$user_lastname}</td>";
	echo "<td>{$user_email}</td>";
	echo "<td>{$user_password}</td>";
	echo "<td><img  width='100' height='60' src='../img/{$user_image}' alt='user Image' ></td>";
	echo "<td>{$date}</td>";
	echo "<td>{$user_role}</td>";
	echo "<td>{$randsalt}</td>";
	echo "<td><a href='?change_to_admin={$user_id}'><span class='glyphicon glyphicon-ok-sign' style='color: green;'></span></a></td>";
	echo "<td><a href='?change_to_sub={$user_id}'><span class='glyphicon glyphicon-off' style='color: #265a88;'></span></a></td>";

	echo "<td><a href='users.php?source=edit_user&u_id={$user_id}'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
	echo "<td><a href='?del={$user_id}'><i class='fa fa-times' style='color: red;''></i></a></td>";
	echo "</tr>";

}

?>


                </tbody>
            </table>



           <?php
if (isset($_GET['change_to_admin'])) {
	$user_admin = $_GET['change_to_admin'];
	if ($_SESSION['role'] !== 'Admin') {
		header('Location: ./user_error.php');
	} else {
		$publish_query = "UPDATE users SET user_role='Admin' WHERE user_id={$user_admin}";
		$run_publish_query = mysqli_query($con, $publish_query);
		header('Location:users.php');
	}
}

?>

            <?php
if (isset($_GET['change_to_sub'])) {
	$user_sub = $_GET['change_to_sub'];
	if ($_SESSION['role'] !== 'Admin') {
		header('Location: ./user_error.php');
	} else {
		$draft_query = "UPDATE users SET user_role='User' WHERE user_id={$user_sub}";
		$run_draft_query = mysqli_query($con, $draft_query);
		header('Location:users.php');
	}

}

?>




<?php
if (isset($_GET['del'])) {
	$user_del = $_GET['del'];
	if ($_SESSION['role'] !== 'Admin') {
		header('Location: ./user_error.php');
	} else {
		$del_query = "DELETE FROM users WHERE user_id={$user_del}";
		$run_del_query = mysqli_query($con, $del_query);
		header('Location:users.php');
	}

}
?>

        </div>
    </div>
</div>


