<?php
$db['DB_HOST'] = 'localhost';
$db['DB_USER'] = 'root';
$db['DB_PASSWORD'] = '';
$db['DB_NAME'] = 'cms';
foreach ($db as $key => $value) {
	define($key, $value);
}
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>