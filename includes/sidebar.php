<!-- @author 'Victor Alagwu';
//   @project 'Simple Content Management System';
//   @date    '0ctober 2016'; -->
 <!-- Blog Search Well -->
                <div class="well">

                    <h4>Search</h4>
                    <form method="POST" action="search.php">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

        <div class="well">
                    <h4>Login</h4>
                    <form method="POST" action="includes/login.php">
                    <div class="">
                         <input name="user_name" type="text" class="form-control" placeholder="Enter Username">
                    </div>

                    <div class="input-group">
                        <input name="user_password" type="password" class="form-control" placeholder="Enter Passsword">
                        <span class="input-group-btn">
                            <button name="login" class="btn btn-primary" type="submit">
Submit
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                <!-- Categories Well -->
                <div class="well">
                <?php
$query = "SELECT * FROM categories";
$run_query_siddebar = mysqli_query(
	$con, $query);
?>
                    <h4>Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php
while ($row = mysqli_fetch_assoc($run_query_siddebar)) {
	$cat_id = $row['cat_id'];
	$cat_title = $row['cat_title'];
	echo "<li><a href='category.php?cat_id={$cat_id}'>{$cat_title}</a>
                                </li>";
}
?>
                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->

                <?php include 'widget.php';?>