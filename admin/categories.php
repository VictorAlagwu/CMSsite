<?php include 'includes/admin_header.php';?>
    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/admin_navbar.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Categories Page
                            <small>Category Name</small>
                        </h1>
                    </div>
                </div>
<?php
insert_category();
?>
                <div class="row">
                    <div class="col-xs-6">

                            <form method="POST" action="" role="form">
                                <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" name="cat_title"  class="form-control">
                                </div>
                                <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </form>


<?php
update_category();
?>





                 </div>
                    <div class="col-xs-6">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Categories Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
$query = "SELECT * FROM categories";
$run_query = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run_query)) {

	$cat_id = $row['cat_id'];
	$cat_title = $row['cat_title'];
	# code...

	?><tr>

                                <td><?php echo $cat_id; ?></td>
                                <td><?php echo $cat_title; ?></td>
                                <td><a href="categories.php?edit=<?php echo $cat_id; ?>"><span class="glyphicon glyphicon-edit" style="color: #265a88;"></span></a></td>
                                <td><a href="categories.php?del=<?php echo $cat_id; ?>"><i class="fa fa-times" style="color: red;"></i></a></td>
                            </tr>
                                 <?php
}
//----DELETE QUERY-----
delete_category();
?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>

                <!-- /.row -->








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
