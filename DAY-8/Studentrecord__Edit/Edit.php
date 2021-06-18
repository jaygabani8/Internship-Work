<?php 

 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);
        if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location:table.php");
        }
        // select data from table
	$editid = $_GET['id'];

	$editq = mysqli_query($connection,
		"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));

	$editdata = mysqli_fetch_array($editq);
        //print_r($editdata);

if ($_POST) {
	$txt1 = $_POST['txt1'];
	$txt2 = $_POST['txt2'];
	$txt3 = $_POST['txt3'];
        $txt4 = $_POST['txt4'];
        $txt5 = $_POST['txt5'];
        $txt6 = $_POST['txt6'];
        $txt7 = $_POST['txt7'];
        $txt8 = $_POST['txt8'];
        $txt9 = $_POST['txt9'];
        $txt10 = $_POST['txt10'];
        

	$ud = mysqli_query($connection,
		"update tbl_student set st_name='{$txt1}',st_gender='{$txt2}',st_dob='{$txt3}',st_email='{$txt4}',st_mobile='{$txt5}',st_address='{$txt6}',st_passwd='{$txt7}',st_area='{$txt8}',st_pincode='{$txt9}',st_bloodgroup='{$txt10}' where st_id='{$editid}'") or die(mysqli_error($connection));

	if($ud){
		echo"<script>alert('Record Updated'); window.location='table.php';</script>";
	}
}
?>


<html>
<body>
	<form method="post">
            <table>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="txt1" value="<?php echo $editdata['st_name']; ?>" /> <br/> <br/></td>
			</tr>
                        <tr>
				<td>Gender : </td>
				<td><select name="txt2">
					<option value="Male" <?php if($editdata['st_gender']=="Male"){ echo "selected"; } ?>> Male</option>
					<option value="Female"<?php if($editdata['st_gender']=="Female"){ echo "selected"; } ?>>Female</option></select></td>
			</tr>
                        <tr>
				<td>Date of Birth : </td>
                                <td><input type="date" name="txt3" value="<?php echo $editdata['st_dob'];?>"/> <br/><br/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="txt4" value="<?php echo $editdata['st_email']; ?>"/><br/> <br/></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="Number" name="txt5" value="<?php echo $editdata['st_mobile']; ?>" /><br/> <br/></td>
			</tr>
                        <tr>
				<td>Address : </td>
				<td><input type="text" name="txt6" value="<?php echo $editdata['st_address']; ?>"><br/> <br/></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="txt7" value="<?php echo $editdata['st_passwd']; ?>" /><br/> <br/></td>
			</tr>
                        <tr>
				<td>Area : </td>
				<td><input type="text" name="txt8" value="<?php echo $editdata['st_area']; ?>"/><br/> <br/></td>
			</tr>
			<tr>
				<td>Pincode : </td>
				<td><input type="Number" name="txt9" value="<?php echo $editdata['st_pincode']; ?>"><br/> <br/></td>
			</tr>
			<tr>
				<td>Blood Group : </td>
				<td><input type="text" name="txt10" value="<?php echo $editdata['st_bloodgroup']; ?>" /><br/> <br/></td>
			</tr>
			
			
			<tr>
				<td><input type="submit" /></td>
				<td><input type="reset" /></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
echo "<a href='table.php'> Display Record </a>";
?>
