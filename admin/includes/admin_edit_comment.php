<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
if (isset($_GET['c_id'])) {
	$id = $_GET['c_id'];
} else {
	echo "Wrong ID";
}
//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
//---------QUERY TO CALL ALL THE DATAS IN POSTS TABLE----
$edit_query = "SELECT * FROM comments WHERE comment_id=$id";
$post_run_query = mysqli_query($con, $edit_query);

while ($row = mysqli_fetch_assoc($post_run_query)) {
	$comment_author = $row['comment_author'];
	$comment_email = $row['comment_email'];
	$comment_date = $row['comment_date'];
	$comment_content = $row['comment_content'];
	$comment_status = $row['comment_status'];
}

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
//

if (isset($_POST['create_comment'])) {

	//--VARIABLES--
	$comment_author = $_POST['comment_author'];

	$comment_date = date('d-m-y');

	$comment_content = $_POST['comment_content'];
	$comment_email = $_POST['comment_email'];
	$comment_post_id = 4;
	$comment_status = $_POST['comment_status'];

	//-------QUERY TO RELOAD IMAGE IN EDIT AND UPDATE PAGE
	//-------QUERY TO UPDATE DATA STORE IN POST TABLE---------
	$update_query = "UPDATE comments SET comment_author='{$comment_author}',";
	$update_query .= "comment_email='{$comment_email}',comment_date=now(),";
	$update_query .= "comment_content='{$comment_content}',comment_status='{$comment_status}'";
	$update_query .= "WHERE comment_id={$id}";
	$run_update_query = mysqli_query($con, $update_query);

}

?>

<form role="form" action="" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label for="comment_author">Comment Author</label>
		<input type="text" name="comment_author" class="form-control" value="<?php echo $comment_author; ?>">
	</div>

	<div class="form-group">
		<label for="comment_email">Comment Email</label>
		<input type="text" name="comment_email" class="form-control" value="<?php echo $comment_email; ?>">
	</div>

	<div class="form-group">
		<label for="comment_status">Comment Status</label>
		<input type="text" name="comment_status" class="form-control" value="<?php echo $comment_status; ?>">
	</div>
	<div class="form-group">
		<label for="comment_content">Comment Content</label>
		<textarea  class="form-control" name="comment_content" id="" cols="30" rows="10"><?php echo $comment_content; ?>
		</textarea>
	</div>
<button type="submit" name="create_comment" class="btn btn-primary" value="Update Comment">Update Comment</button>

</form>
