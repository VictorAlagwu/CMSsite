<?php

function insert_category() {
	global $con;
	if (isset($_POST['submit'])) {
		$cat_title = $_POST['cat_title'];

		if ($cat_title == "" || empty($cat_title)) {
			echo "Please input category";
		} else {
			//--ADDING QUERY---
			$add_category_query = "INSERT INTO categories(cat_title) VALUES ('{$cat_title}')";
			$run_add_category_query = mysqli_query($con, $add_category_query);
			header('Location: categories.php');
			if (!$run_add_category_query) {
				die('Error processing query');
			}
		}
	}
}

function delete_category() {
	global $con;
	if (isset($_GET['del'])) {
		$cat_del = $_GET['del'];
		$del_query = "DELETE FROM categories WHERE cat_id = {$cat_del} ";
		$run_del_query = mysqli_query($con, $del_query);
		header('Location: categories.php');
	}

}
function update_category() {
	global $con;
	if (isset($_GET['edit'])) {
		$cat_id = $_GET['edit'];
		include "includes/admin_update_categories.php";
	}
}

?>