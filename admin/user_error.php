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
                   <h2>Sorry,you can not access this feature, contact the admin</h2>



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
