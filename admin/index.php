<?php include 'includes/admin_header.php';
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';

?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/admin_navbar.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin Page
                            <small><?php echo $_SESSION['firstname']; ?></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
<div class="row">
<!--Begin 1 Comment-->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                    <?php
$query = "SELECT * FROM comments";
$run_query = mysqli_query($con, $query);
$comment_num = mysqli_num_rows($run_query);
echo "<div class='text-right huge'>{$comment_num}</div>";
?>

                                        <div class="text-right">Comments</div>

                                    </div>
                                </div>
                            </div>
                            <a href="comment.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View All Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--Second Panel-->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                    <?php
$query = "SELECT * FROM posts";
$run_query = mysqli_query($con, $query);
$post_num = mysqli_num_rows($run_query);
echo "<div class='text-right huge'>{$post_num}</div>";
?>

                                        <div class="text-right">Posts</div>

                                    </div>
                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View All Posts</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--End Panel-->

                    <!--Third Panel-->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                                                   <?php
$query = "SELECT * FROM users";
$run_query = mysqli_query($con, $query);
$user_num = mysqli_num_rows($run_query);
echo "<div class='text-right huge'>{$user_num}</div>";
?>


                                        <div class="text-right">Users</div>

                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View All Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--End Panel-->

                    <!--Fourth Panel-->
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-folder-open fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9">
                                                                   <?php
$query = "SELECT * FROM categories";
$run_query = mysqli_query($con, $query);
$category_num = mysqli_num_rows($run_query);
echo "<div class='text-right huge'>{$category_num}</div>";
?>


                                        <div class="text-right">Categories</div>

                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View All Categories</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--End Panel-->
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
