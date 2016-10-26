<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
//<<<<<<<<<<<<<<<<<<<<<<<<----ADD POST--->>>>>>>>>>>>>>>>>>>>>>>>>>>>//

if (isset($_POST['create_post'])) {

//---ASSIGNING VARIABLES-----
	$post_category_id = $_POST['post_category'];
	$post_title = $_POST['post_title'];
	$post_author = $_POST['post_author'];

	$post_date = date('d-m-y');

	$post_image = $_FILES['post_image']['name'];
	$post_image_temp = $_FILES['post_image']['tmp_name'];

	$post_content = $_POST['post_content'];
	$post_tags = $_POST['post_tags'];
	$post_comment_count = 4;
	$post_status = $_POST['post_status'];
//---ASSIGNING VARIABLES-----
	move_uploaded_file($post_image_temp, "../img/$post_image"); //--MOVING UPLOADED FILES TO TEMPORARY DIRECTORY--

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
	//
	//-------QUERY TO INSERT DATA INTO POST TABLE---------
	$post_query = "INSERT INTO posts(post_category_id,";
	$post_query .= "post_title,post_author,post_date,";
	$post_query .= "post_image,post_content,post_tags,";
	$post_query .= "post_comment_count,post_status)";
	$post_query .= " VALUES ('{$post_category_id}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_comment_count}','{$post_status}' )";
	$create_post_query = mysqli_query($con, $post_query);
	if (!$create_post_query) {
		die("Error in calling query" . mysqli_error($con));
	}
}
?>
<form role="form" action="" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label for="post_title">Post Title</label>
		<input type="text" name="post_title" class="form-control" required>
	</div>

	<div class="form-group">
		<select class="form-control" name="post_category" id="">
		    <label for="cat_title">Category</label>
			<?php

//---------QUERY TO CALL ALL THE DATAS IN CATEGORIES TABLE----
$query = "SELECT * FROM categories";
$run_query = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run_query)) {
	$cat_id = $row['cat_id'];
	$cat_title = $row['cat_title'];
	echo "<option value='$cat_id'>{$cat_title}</option>";
}

?>
	    </select>
	</div>

	<div class="form-group">
		<label for="post_author">Post Author</label>
		<input type="text" name="post_author" class="form-control" required>
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" class="form-control" required>
	</div>

	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name="post_image" required>
	</div>
	<div class="form-group">
		<label for="post_tag">Post Tags</label>
		<input type="text" name="post_tags" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="post_content">Post Content</label>
		<textarea class="form-control" name="post_content" id="" cols="30" rows="10" required></textarea>
	</div>
<button type="submit" name="create_post" class="btn btn-primary" value="Publish Post">Publish Post</button>

</form>
