  <form method="POST" action="" role="form">
                                <div class="form-group">
                                <label for="cat_title">Edit Category</label>
 <?php
if (isset($_GET['edit'])) {
	$cat_edit = $_GET['edit'];
	$query = "SELECT * FROM categories WHERE cat_id={$cat_edit}";
	$run_query = mysqli_query($con, $query);
	while ($row = mysqli_fetch_array($run_query)) {
		$cat_id = $row['cat_id'];
		$cat_title = $row['cat_title'];
		?>

<input value="<?php if (isset($cat_title)) {echo $cat_title;}?>" type="text" name="cat_title"  class="form-control">
 <?php }}?>
 <?php

//---UPDATE QUERY----
if (isset($_POST['cat_update'])) {
	$cat_update = $_POST['cat_title'];
	$update_query = "UPDATE categories SET cat_title = '{$cat_update}'  WHERE cat_id = {$cat_edit}";
	$run_update_query = mysqli_query($con, $update_query);
	if (!$run_update_query) {
		echo "Update Query Error";
	}

}?>
                                </div>
                                <div class="form-group">
                                <button type="submit" name="cat_update" class="btn btn-primary">Update Category</button>
                                </div>
                            </form>