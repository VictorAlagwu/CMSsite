<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
if (isset($_GET['p_id'])) {
	$id = $_GET['p_id'];
} else {
	echo "Wrong ID";
}
//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
//---------QUERY TO CALL ALL THE DATAS IN POSTS TABLE----
$edit_query = "SELECT * FROM posts WHERE post_id=$id";
$post_run_query = mysqli_query($con, $edit_query);

while ($row = mysqli_fetch_assoc($post_run_query)) {
	$post_id = $row['post_id'];
	$post_title = $row['post_title'];
	$post_author = $row['post_author'];
	$post_date = $row['post_date'];
	$post_content = $row['post_content'];
	$post_tags = $row['post_tags'];
	$post_comment_count = $row['post_comment_count'];
	$post_status = $row['post_status'];
	$post_image = $row['post_image'];
}

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
//

if (isset($_POST['create_post'])) {

	//--VARIABLES--
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

	move_uploaded_file($post_image_temp, "../img/$post_image");

	//-------QUERY TO RELOAD IMAGE IN EDIT AND UPDATE PAGE
	if (empty($post_image)) {
		$query = "SELECT * FROM posts WHERE post_id=$id";
		$image_query = mysqli_query($con, $query);
		while ($row = mysqli_fetch_array($image_query)) {
			$post_image = $row['post_image'];
		}
	}
//-------QUERY TO UPDATE DATA STORE IN POST TABLE---------
	$update_query = "UPDATE posts SET post_title='{$post_title}',";
	$update_query .= "post_category_id='{$post_category_id}',post_date=now(),";
	$update_query .= "post_author='{$post_author}',post_status='{$post_status}',";
	$update_query .= "post_image='{$post_image}', post_tags='{$post_tags}',";
	$update_query .= "post_content='$post_content' WHERE post_id={$id}";
	$run_update_query = mysqli_query($con, $update_query);

}

?>

<form role="form" action="" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label for="post_title">Post Title</label>
		<input type="text" name="post_title" class="form-control" value="<?php echo $post_title; ?>">
	</div>

	<div class="form-group">
		<select class="form-control" name="post_category" id="">
		<label for="cat_title">Category</label>
					<?php
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
		<input type="text" name="post_author" class="form-control" value="<?php echo $post_author; ?>">
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" name="post_status" class="form-control" value="<?php echo $post_status; ?>">
	</div>

	<div class="form-group">

		<label for="post_image">Post Image</label>
		<img class="img-responsive" width="200" src="../img/<?php echo $post_image; ?>" alt="Photo">
		<input type="file" name="post_image">

	</div>
	<div class="form-group">
		<label for="post_tags">Post Tags</label>
		<input type="text" name="post_tags" class="form-control" value="<?php echo $post_tags; ?>">
	</div>
	<div class="form-group">
		<label for="post_content">Post Content</label>
		<textarea  class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content; ?>
		</textarea>
	</div>
<button type="submit" name="create_post" class="btn btn-primary" value="Update Post">Update Post</button>

</form>
