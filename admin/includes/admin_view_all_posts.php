<!-- @author 'Victor Alagwu';
//   @project 'Simple Content Management System';
//   @date    '0ctober 2016'; -->
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
                        <th>Delete</th>
                        <th>Edit</th>
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

	$cat_query = "SELECT * FROM categories WHERE cat_id=$post_category_id";
	$run_cat_query = mysqli_query($con, $cat_query);
	while ($cat_row = mysqli_fetch_array($run_cat_query)) {
		$cat_title = $cat_row['cat_title'];
		$cat_id = $cat_row['cat_id'];
	}

	echo "<tr>";
	echo "<td>{$post_id}</td>";
	echo "<td>{$post_author}</td>";
	echo "<td>{$post_title}</td>";
	echo "<td>{$cat_title}</td>";
	echo "<td>{$post_status}</td>";
	echo "<td><img  width='100' src='../img/{$post_image}' alt='Post Image' ></td>";
	echo "<td>{$post_tags}</td>";
	echo "<td>{$post_comment_count}</td>";
	echo "<td>{$post_date}</td>";
	echo "<td><a href='?del={$post_id}'><i class='fa fa-times' style='color: red;''></i></a></td>";
	echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
	echo "</tr>";

}

?>


                </tbody>
            </table>
            <?php
if (isset($_GET['del'])) {
	$post_del = $_GET['del'];
	$del_query = "DELETE FROM posts WHERE post_id={$post_del}";
	$run_del_query = mysqli_query($con, $del_query);
	header('Location:posts.php');
}

?>
        </div>
    </div>
</div>


