
<?php include 'includes/header.php';?>
        <!-- Navigation Bar -->
   <?php include 'includes/navbar.php';?>
        <!-- Navigation Bar -->

    <div class="container">
        <div class="row">
	        <!-- Page Content -->
	        <div class="col-md-8">
            <h1 class="page-header">Heading<small>Secondary Text</small></h1>
            <?php
$query = "SELECT * FROM posts";
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
	        	<!-- Post Area-->

	        	<p><h2><a href="#"><?php echo $post_title; ?></a></h2></p>
	        	<p><h3>by <a href="#"><?php echo $post_author; ?></a></h3></p>
	        	<p><span class="glyphicon glyphicon-time"></span>Posted on <?php echo $post_date; ?></p>
	        	<hr>
	        	<img class="img-responsive img-rounded" src="img/<?php echo $post_image; ?>" alt="900 * 300">
	        	<hr>
	        	<p><?php echo $post_content; ?></p>
	        	<a href="#"><button type="button" class="btn btn-primary">Read More<span class="glyphicon glyphicon-chevron-right"></span></button></a>
	        	<hr>
	        	<!-- Post Area -->
	        	<?php }?>

	        	<hr>
	        	<ul class="pager">
				  <li class="previous"><a href="#"><span class="glyphicon glyphicon-arrow-left"></span> Older</a></li>
				  <li class="next"><a href="#">Newer <span class="glyphicon glyphicon-arrow-right"></span></a></li>
				</ul>
	        </div>
	        <!-- Page Content -->
	        <!-- Side Content -->
	        <div class="col-md-4">

               <?php include 'includes/sidebar.php';
?>

	        </div>
	        <!-- Sde Content -->
        </div>

        <!-- Footer -->
        <?php include 'includes/footer.php';?>
        <!-- Footer -->
    </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>