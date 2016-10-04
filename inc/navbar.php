<!--Navigation bar-->
	<nav class="navbar-inverse navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Victor's Blog</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-duplicate"></span> Pages<b class="caret"></b></a>
					<ul class="dropdown-menu">
                      		<li><a href="#">Page 1</a></li>
                      		<li><a href="#">Page 2</a></li>
                     		 <li><a href="#">Page 3</a></li>
                     		 <li><a href="#">Page 4</a></li>
                      		<li role="separator" class="divider"></li>
                      		<li><a href="#">Page 5</a></li>
                  			</ul></li>
                  		<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Categories <b class="caret"></b></a>
					<ul class="dropdown-menu">
					<!--PHP CODE FOR CATEGORY-->

					<?php
$call_data = 'SELECT * FROM categories ORDER BY id DESC';
$run_query = mysqli_query($con, $call_data);
$num_data = mysqli_num_rows($run_query);
if ($num_data > 0) {
	while ($rows = mysqli_fetch_array($run_query)) {
		$category = ucfirst($rows['category']);
		$id = $rows['id'];
		echo " <li><a href='index.php?cat=" . $id . "' >$category</a></li>";
	}
} else {
	echo "<li><a href='#' >No Category Yet</a></li>";
}
?>
<!--eND OF CATEGORY-->

				</ul></li>

					<li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!--End of Navigattion Bar-->