
 <!-- Blog Search Well -->
                <div class="well">

                    <h4>Blog Search</h4>
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

                <!-- Blog Categories Well -->
                <div class="well">
                <?php
$query = "SELECT * FROM categories";
$run_query_siddebar = mysqli_query(
	$con, $query);
?>
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php
while ($row = mysqli_fetch_assoc($run_query_siddebar)) {
	$cat_title = $row['cat_title'];
	echo "<li><a href='#'>{$cat_title}</a>
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