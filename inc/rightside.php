<div class="widgets">

				<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for..." name="search"><span class="input-group-btn">
					<button class="btn btn-default" type="button">Search</button>
				</span>
				</div><!--eND INPUT GROUP-->
				</div>
		<!--End of search button section-->

		<!--Start of Popular Post Section-->
				<div class="widgets">
					<div class="popular">
					<h4>Popular Posts</h4>
					<?php
$side_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY views DESC";
$side_run_query = mysqli_query($con, $side_query);
$side_num_post = mysqli_num_rows($side_run_query);
if ($side_num_post > 0) {
	while ($s_row = mysqli_fetch_array($side_run_query)) {
		$s_id = $s_row['id'];
		$s_date = getdate($s_row['date_data']);
		$s_day = $s_date['mday'];
		$s_month = $s_date['month'];
		$s_year = $s_date['year'];
		$s_title = $s_row['title'];
		$s_author = $s_row['author'];
		$s_author_image = $s_row['author_image'];
		$s_image = $s_row['image'];
		$s_category = $s_row['category'];
		$s_tags = $s_row['tags'];
		$s_post_data = $s_row['post_data'];
		$s_views = $s_row['views'];
		$s_status = $s_row['status'];

		?>
					<!--Creating row for the post and it image-->
						<hr>
							<div class="row">
								<div class="col-xs-4">
									<img src="img/<?php echo $s_image; ?>" alt="Image">
								</div>
								<div class="col-xs-8 details">
									<h4><?php echo $s_title; ?> </h4>
									<p><i class="fa fa-clock-o"> </i><?php echo $s_day . ' ,' . $s_month . ' ' . $s_year ?></p>
								</div>
							</div>
			<hr>
			<?php
}
} else {
	echo "<h2>No Post have been made</h2>";
}

?>

					</div>
				</div>
				<!--Endin of second widget"Ending of popular class"-->


				<!--Beginniong recent post widget-->

		<div class="widgets">

					<div class="popular">
						<h4>Recent Posts</h4>

					<!--Creating row for the post and it image-->
						<hr>
						<?php
$side_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC";
$side_run_query = mysqli_query($con, $side_query);
$side_num_post = mysqli_num_rows($side_run_query);
if ($side_num_post > 0) {
	while ($s_row = mysqli_fetch_array($side_run_query)) {
		$s_id = $s_row['id'];
		$s_date = getdate($s_row['date_data']);
		$s_day = $s_date['mday'];
		$s_month = $s_date['month'];
		$s_year = $s_date['year'];
		$s_title = $s_row['title'];
		$s_author = $s_row['author'];
		$s_author_image = $s_row['author_image'];
		$s_image = $s_row['image'];
		$s_category = $s_row['category'];
		$s_tags = $s_row['tags'];
		$s_post_data = $s_row['post_data'];
		$s_views = $s_row['views'];
		$s_status = $s_row['status'];

		?>
						<div class="row">
							<div class="col-xs-4">
								<img src="img/<?php echo $s_image ?>" alt="Image">
							</div>
							<div class="col-xs-8 details">
								<h4><?php echo $s_title; ?> </h4>
								<p><i class="fa fa-clock-o"> </i><?php echo $s_day . ' ,' . $s_month . ' ' . $s_year ?></p>
							</div>
						</div>
						<hr>


<?php
}
} else {
	echo "<h2>No Post have been made</h2>";
}

?>

					</div>
								</div>
				<!--ending recent widget-->

				<!--Beginning of categories-->
				<div class="widget">
					<div class="popular">
					<h4>Categories</h4>
					<hr>
					<div class="row">
					<!--First Un-order list-->
						<div class="col-xs-6">
						<ul>

						<?php
$cat_query = "SELECT * FROM categories"; //Calling data from database
$cat_run_query = mysqli_query($con, $cat_query); //Using database connection to request for data
$cat_num_post = mysqli_num_rows($cat_run_query);
if ($cat_num_post > 0) {

	while ($c_row = mysqli_fetch_array($cat_run_query)) {
		$c_id = $c_row['id'];
		$c_category = $c_row['category'];

		echo "<li><a href='index.php?cat=" . $c_id . "'> $c_category </a></li><hr>";

	}
} else {
	echo "No categories";
}
?>
						</ul>
						</div>
						<!--Ending of first unorder list-->

						</div>

					</div>
				</div>

<!--ending of categories-->
<!--sOCIAL iCOn sPACE-->
				<div class="widget">
					<div class="categories">
						<h4>
						Tech Sites
						</h4>
						<br/>
						<div class="row">
							<div class="col-xs-4">

								<a href="#"><img src="img/hp.jpg" id="icon"></a>
							</div>
							<div class="col-xs-4">

								<a href="#"><img src="img/opera.jpg" id="icon"></a></a></a></a>
							</div>
							<div class="col-xs-4">

								<a href="#"><img src="img/apple.jpg" id="icon"></a></a></a>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-4">

								<a href="#"><img src="img/window.jpg" id="icon"></a></a>
							</div>
							<div class="col-xs-4">

								<a href="#"><a href="#"><img src="img/firefox.jpg" id="icon"></a>
							</div>
							<div class="col-xs-4">

								<a href="#"><img src="img/intel.jpg" id="icon"></a>
							</div>
						</div>

					</div>

				</div>

				<!--Ending of social icon-->





