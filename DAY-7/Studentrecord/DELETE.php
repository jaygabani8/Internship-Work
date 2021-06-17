<?php

	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection,
		"delete from tbl_student where st_id='{$id}'") or die(mysqli_error($connection));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='Table.php';</script>";
	}
?>

