<!-- @author 'Victor Alagwu';
//   @project 'Simple Content Management System';
//   @date    '0ctober 2016'; -->
<?php include 'includes/header.php';?>
    <!-- Navigation -->
<?php include 'includes/navbar.php';?>
<?php
if (isset($_GET['post'])) {
	$post = $_GET['post'];
}
$query = "SELECT * FROM posts WHERE post_id=$post";
$run_query = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($run_query)) {
	$post_title = $row['post_title'];
	$post_id = $row['post_id'];
	$post_category_id = $row['post_category_id'];
	$post_author = $row['post_author'];
	$post_date = $row['post_date'];
	$post_image = $row['post_image'];
	$post_content = $row['post_content'];
	$post_tags = $row['post_tags'];
	$post_comment_count = $row['post_comment_count'];
	$post_status = $row['post_status'];

	?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!--First Post -->
                <hr>
	       		<p><h2><a href="post.php?post=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2></p>
                <p><h3>by <a href="#"><?php echo $post_author; ?></a></h3></p>
                <p><span class="glyphicon glyphicon-time"></span>Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive img-rounded" src="img/<?php echo $post_image; ?>" alt="900 * 300">
                <hr>
                <p><?php echo $post_content; ?></p>

                <hr>
                <?php }?>
	        	<!-- First Post -->
                <!-- Blog Comments -->


            <!-- Comments Form -->
<?php
if (isset($_POST['create_comment'])) {
	$comment_author = $_POST['comment_author'];

	$comment_date = date('d-m-y');

	$comment_content = $_POST['comment_content'];
	$comment_email = $_POST['comment_email'];
	$post = $_GET['post'];

	//---ASSIGNING VARIABLES-----

//<<<<<<<<<<<<<<<<<<<<----START QUERY---<<<<<<<<<<<<<<<<<<<<<<<
	//
	//-------QUERY TO INSERT DATA INTO POST TABLE---------
	$post_query = "INSERT INTO comments(comment_post_id,";
	$post_query .= "comment_author,comment_email,";
	$post_query .= "comment_content,";
	$post_query .= "comment_status,comment_date)";
	$post_query .= " VALUES ('{$post}','{$comment_author}','{$comment_email}','{$comment_content}','approved',now() )";
	$create_comment_query = mysqli_query($con, $post_query);
	if (!$create_comment_query) {
		die("Error in calling query" . mysqli_error($con));
	}

	$uquery = "UPDATE posts SET post_comment_count=post_comment_count + 1 WHERE post_id= $post";
	$run_query = mysqli_query($con, $uquery);

}

?>


                <div class="well">
                    <h4>Leave a Comment:</h4>
                        <form role="form" method="POST" action="">
                            <div class="form-group">
                                <label for="comment_author">Author</label>
                                <input type="text" class="form-control" name="comment_author">
                            </div>
                            <div class="form-group">
                                <label for="comment_email">Email</label>
                                <input type="email" class="form-control" name="comment_email" >
                            </div>
                            <div class="form-group">
                            <label for="comment_email">Your Comment</label>
                                <textarea type="text" class="form-control" rows="3" name="comment_content"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit"  name="create_comment">Submit</button>
                        </form>
                </div>

                <hr>
                <!-- Posted Comments -->

                <!-- Comment-->
                <?php
$comment_query = "SELECT * FROM comments WHERE comment_post_id= {$post} AND comment_status='approved' ORDER BY comment_id DESC";
$run_comment_query = mysqli_query($con, $comment_query);
while ($row = mysqli_fetch_array($run_comment_query)) {
	$comment_post_id = $row['comment_post_id'];
	$comment_date = $row['comment_date'];
	$comment_content = $row['comment_content'];
	$comment_author = $row['comment_author'];

	echo " <div class='media'>";
	echo "<a class='pull-left' href='#'>";
	echo "<img class='media-object' src='img/comment.jpg' alt=''>";
	echo "</a>";
	echo "<div class='media-body'>";
	echo "<h4 class='media-heading'>{$comment_author}
                            <small>{$comment_date}</small>
                        </h4>";
	echo "{$comment_content}";
	echo "</div>";
	echo "</div>";

}

?>










                <!-- Comment-->



    </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

               <?php include 'includes/sidebar.php';
?>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php include 'includes/footer.php';?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>