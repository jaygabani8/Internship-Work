<?php 

 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);
        if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location:Table.php");
        }
        // select data from table
	$editid = $_GET['id'];

	$editq = mysqli_query($connection,
		"select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));

	$editdata = mysqli_fetch_array($editq);
        //print_r($editdata);

if ($_POST) {
	$txt1 = $_POST['txt1'];
	$txt2 = $_POST['txt2'];
	$txt3 = $_POST['txt3'];

	$ud = mysqli_query($connection,
		"update tbl_user set user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$editid}'") or die(mysqli_error($connection));

	if($ud){
		echo"<script>alert('Record Updated'); window.location='Table.php';</script>";
	}
}
?>


<html>
<body>
	<form method="post">
		Name : <input type="text" name="txt1" value="<?php echo $editdata['user_name']; ?>" />
                <br/>
		Gender : <select name="txt2">
					<option value="Male" <?php if($editdata['user_gender']=="Male"){ echo "selected"; } ?> >Male</option>
					<option value="Female" <?php if($editdata['user_gender']=="Female"){ echo "selected"; } ?> >Female</option>
				</select>
                <br/>
		Mobile : <input type="Number" name="txt3" value="<?php echo $editdata['user_mobile']; ?>" />
		<input type="submit" />
		
	</form>
</body>
</html>
