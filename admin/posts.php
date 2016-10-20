<?php include 'includes/admin_header.php';?>
    <div id="wrapper">
<?php ?>
        <!-- Navigation -->
       <?php include 'includes/admin_navbar.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Posts Page
                            <small>Posts Content</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Tags</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
$query = "SELECT * FROM posts";
$run_query = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run_query)) {
	$post_id = $row['post_id'];
	$post_category_id = $row['post_category_id'];
	$post_title = $row['post_title'];
	$post_author = $row['post_author'];
	$post_date = $row['post_date'];
	$post_image = $row['post_image'];
	$post_content = $row['post_content'];
	$post_tags = $row['post_tags'];
	$post_comment_count = $row['post_comment_count'];
	$post_status = $row['post_status'];
	echo "<tr>";
	echo "<td>{$post_id}</td>";
	echo "<td>{$post_author}</td>";
	echo "<td>{$post_title}</td>";
	echo "<td>{$post_category_id}</td>";
	echo "<td>{$post_status}</td>";
	echo "<td><img class='img-responsive' src='./img/{$post_image}' alt='Post Image' ></td>";
	echo "<td>{$post_tags}</td>";
	echo "<td>{$post_comment_count}</td>";
	echo "<td>{$post_date}</td>";
	echo "</tr>";

}

?>


                </tbody>
            </table>
        </div>
    </div>
</div>








            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<!--
   <?php 'includes/admin_footer.php';?> -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
