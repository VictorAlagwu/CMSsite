     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"">
			<div class="container">


				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Victor's CMS</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    	<?php
$query = "SELECT * FROM categories";
$run_query = mysqli_query(
	$con, $query);
while ($row = mysqli_fetch_assoc($run_query)) {
	$cat_title = $row['cat_title'];
	echo "<li><a href=''>{$cat_title}</a></li>";
}
?>
						 <li><a href="admin">Admin</a></li><!--
						<li><a href="#">Category</a></li>
						<li><a href="#">Contact Us</a></li> -->
					</ul>
				</div>
			</div>
	    </nav>