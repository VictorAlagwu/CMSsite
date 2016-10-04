<?php
include_once 'inc/db.php';

/* Code to insert data */
if (isset($_POST['add'])) {
	$category = $_POST['category'];
	$insert_query = "INSERT INTO categories (category) VALUES ('$category')";
	$sql = mysqli_query($con, $insert_query);

}
/*End of insert data code*/

/*Code to delete data */
if (isset($_GET['del_id'])) {
	$del_query = "DELETE FROM categories WHERE id='$_GET[del_id]'";
	$sql = mysqli_query($con, $del_query);
	header("Location: categories.php");
}

/* End of Delete Data code */

/*Code to edit data */
if (isset($_GET['edit_id'])) {
	$edit_query = "SELECT * FROM categories WHERE id='$_GET[edit_id]'";
	$sql = mysqli_query($con, $edit_query);
	$getROW = mysqli_fetch_array($sql);
}

/* END Code to edit data */

/*cODE TO UPdate editted data */
if (isset($_POST['update'])) {
	$update_query = "UPDATE categories SET category='$_POST[category]' WHERE id='$_GET[edit_id]' ";
	$sql = mysqli_query($con, $update_query);
	header("Location: categories.php");
}

?>
