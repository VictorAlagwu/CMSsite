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
                        <th>Author</th>
                        <th>Email</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>In Responce to</th>
                        <th>Date</th>
                        <th>approved</th>
                        <th>Up-approved</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

$query = "SELECT * FROM comments";
$run_query = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($run_query)) {
	$comment_id = $row['comment_id'];
	$comment_post_id = $row['comment_post_id'];
	$comment_author = $row['comment_author'];
	$comment_email = $row['comment_email'];
	$comment_date = $row['comment_date'];
	$comment_content = $row['comment_content'];
	$comment_status = $row['comment_status'];

	echo "<tr>";
	echo "<td>{$comment_id}</td>";
	echo "<td>{$comment_author}</td>";
	echo "<td>{$comment_email}</td>";
	echo "<td>{$comment_content}</td>";
	echo "<td>{$comment_status}</td>";
	$post_query = "SELECT * FROM posts WHERE post_id=$comment_post_id";
	$run_post_query = mysqli_query($con, $post_query);
	while ($row = mysqli_fetch_array($run_post_query)) {
		$post_id = $row['post_id'];
		$post_title = $row['post_title'];
		echo "<td><a href='../post.php?post=$post_id'>{$post_title}</a></td>";
	}

	echo "<td>{$comment_date}</td>";
	echo "<td><a href='comment.php?approved={$comment_id}'><span class='glyphicon glyphicon-ok' style='color: green;'></span></a></td>";
	echo "<td><a href='comment.php?unapproved={$comment_id}'><span class='glyphicon glyphicon-off' style='color: red;' ></span></a></td>";
	// echo "<td><a href='comment.php?source=edit_comment&c_id={$comment_id}'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
	echo "<td><a href='?del={$comment_id}'><i class='fa fa-times' style='color: red;'></i></a></td>";

	echo "</tr>";

}

?>


                </tbody>
            </table>
            <?php

if (isset($_GET['approved'])) {
	$comment_id = $_GET['approved'];
	$approved_query = "UPDATE comments SET comment_status='approved' WHERE comment_id={$comment_id}";
	$run_approved_query = mysqli_query($con, $approved_query);
	header('Location:comment.php');
}

if (isset($_GET['unapproved'])) {
	$comment_id = $_GET['unapproved'];
	$unapproved_query = "UPDATE comments SET comment_status='unapproved' WHERE comment_id={$comment_id}";
	$run_unapproved_query = mysqli_query($con, $unapproved_query);
	header('Location:comment.php');
}

if (isset($_GET['del'])) {
	$comment_del = $_GET['del'];
	$del_query = "DELETE FROM comments WHERE comment_id={$comment_del}";
	$run_del_query = mysqli_query($con, $del_query);
	header('Location:comment.php');
}

?>
        </div>
    </div>
</div>


