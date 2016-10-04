<?php require_once 'inc/top.php';
?>
</head>
<body>

		<!--Space for navigation-->
	<?php require_once 'inc/navbar.php';
$number_of_posts = 3;

if ($_GET['page']) {
	$page_id = $_GET['PAGE'];

} else {
	$page_id = 1;
}

if (isset($_GET['cat'])) {
	$cat_id = $_GET['cat'];
	$cat_query = 'SELECT * FROM categories WHERE id =$cat_id';
	$cat_run_query = mysqli_query($con, $cat_query);
	$cat_num_query = mysqli_num_rows($cat_run_query);
	$cat_name = $cat_num_query['category'];
}

$all_posts_query = "SELECT * FROM posts WHERE status='publish'";
if (isset($cat_name)) {
	$all_posts_query .= " and categories ='$cat_name' ";
}
$all_posts_run = mysqli_query($con, $all_posts_query);
$all_posts = mysqli_num_rows($all_posts_run);
$total_pages = ceil($all_posts / $number_of_posts);
$posts_start_from = ($page_id - 1) * $number_of_posts;

?>
	<!--End navigation

	<!--Beginning of Jumbotron-->
<div class="jumbotron">
	<div class="container">
		<div id="details" class="animated fadeInRight">
			<h1>	Victor <span>	Blog</span></h1>
			<p>		We got you covered.A blog with a difference</p>

		</div>
	</div>
	<img src="img/top-image.jpg" alt="Top Image">
</div>
<!--Ending of Jumbotron-->

<section>
<div class="container">
	<div class="row">

		<div class="col-xs-8 main-post">
 		<!-- Start Slider-->
 		<div class="row slider">
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>
						<li><a href="#" target="_self"><img src="data1/images/slider4.jpg" alt="" title="" id="wows1_0"/></a></li>
						<li><a href="#"><img src="data1/images/slider1.jpg" alt="" title="" id="wows1_1"/></a></li>
						<li><a href="#"><img src="data1/images/slider2.jpg" alt="" title="" id="wows1_2"/></a></li>
						<li><a href="#"><img src="data1/images/slider3.jpg" alt="" title="" id="wows1_3"/></a></li>
					</ul>
				</div>
					<div class="ws_bullets">
					<div>
						<a href="#" title=""><span><img src="data1/tooltips/slider4.jpg" alt=""/>1</span></a>
						<a href="#" title=""><span><img src="data1/tooltips/slider1.jpg" alt=""/>2</span></a>
						<a href="#" title=""><span><img src="data1/tooltips/slider2.jpg" alt=""/>3</span></a>
						<a href="#" title=""><span><img src="data1/tooltips/slider3.jpg" alt=""/>4</span></a></div>
					</div>
				<div class="ws_script" style="position:absolute;left:-99%"><a href="#">Victor</a> by Victor</div>
				<div class="ws_shadow"></div>
			</div>
				<script type="text/javascript" src="engine1/wowslider.js"></script>
				<script type="text/javascript" src="engine1/script.js"></script>
				<!--End Slider  -->
		<hr>
		</div>

			<!--Main Posts Area-->
		<?php
$query = "SELECT * FROM posts WHERE status = 'publish'";
if (isset($cat_name)) {
	$query .= " and categpry = '$cat_name'";
}
$query .= "ORDER BY id DESC LIMIT $posts_start_from,$number_of_posts";

$run_query = mysqli_query($con, $query);
$num_post = mysqli_num_rows($run_query);
if ($num_post > 0) {
	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['id'];
		$date = getdate($row['date_data']);
		$day = $date['mday'];
		$month = $date['month'];
		$year = $date['year'];
		$title = $row['title'];
		$author = $row['author'];
		$author_image = $row['author_image'];
		$image = $row['image'];
		$category = $row['category'];
		$tags = $row['tags'];
		$post_data = $row['post_data'];
		$views = $row['views'];
		$status = $row['status'];

		?>
<div class="post">
	<div class="row">
		<!--Date Tag-->
		<div class="col-xs-2" post-date>
				<p id="date"><?php echo $day; ?></p>
				<p id="month"><?php echo $month; ?></p>
				<p id="year"><?php echo $year; ?></p>
		</div>
		<!--End of Date Tag-->


		<!--Start of post-->
		<div class="col-xs-8">
			<p id="post-header"><a href="post.php?post_id=<?php echo $id; ?>"><?php echo $title; ?></a></p>
			<p id="author">Written By:<a href="https://facebook/victor.alagwu"> <?php echo $author ?></a></p>
		</div>
		<!--End of Post-->


		<!--Author image-->
		<div class="col-xs-2">
			<a href="https://facebook.com/victor.alagwu">
			<img src="img/<?php echo $author_image; ?>" id="pic"></a>
		</div>
		<!--end of author-->

	</div>
	<!--Beginning of post image-->
		<div class="row">
			<div class="col-xs-12">
				<a href="post.php?post_id=<?php echo $id; ?>"><img id="post-image" src="img/<?php echo $image; ?>" alt="iMage"></a>
			</div>
		</div>
		<hr>
	<!--Ending of post image-->


	<div class="row post_data">
			<?php echo substr($post_data, 0, 300) . '.........'; ?>
	</div>
		<div class="readmore">
			<a href="post.php?post_id=<?php echo $id; ?>"><button class="btn btn-info" type="success" name="ReadMore">Read More...</button></a>
		</div>
	<br/>
	<div class="row category">
				<ol class="breadcrumb">
					<li class="glyphicon glyphicon-folder-open" ><a href="index.php?cat=<?php echo $id; ?>"><?php echo '  ' . $category; ?></a></li>
					<li>|</li>
					<li id="comment"><i class="fa fa-comment">Comment</i></li>
				</ol>
	</div>
</div>
<hr>
	<?php
}
} else {
	echo "<h2>No Post have been made</h2>";
}

?>

	<nav class="pager">
		<ul class="pagination">
		<?php
for ($i = 1; $i <= $total_pages; $i++) {
	echo "<li class=\"($page_id==$i)\"><a href='index.php?page=" . $i . "'>$i</a></li>";
}

?>
		</ul>

	</nav>





</div>







			<!--Search button Section-->
		<div class="col-xs-4">
		<?php require_once 'inc/rightside.php';
?>

		</div>
	</div>
</div>
</section>

<?php require_once 'inc/footer.php';
?>


	<script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>