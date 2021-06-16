<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if ($_POST) {
	$name  = $_POST['txt1'];
        $gender = $_POST['txt2'];
        $dob = $_POST['txt3'];
	$email = $_POST['txt4'];
	$mobile = $_POST['txt5'];
        $address = $_POST['txt6'];
	$passwd = $_POST['txt7'];
	$area = $_POST['txt8'];
	$pincode = $_POST['txt9'];
	$bloodgroup = $_POST['txt10'];
        
        
        $q = mysqli_query($connection,
		"insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_passwd,st_area,st_pincode,st_bloodgroup) 
		values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$passwd}','{$area}','{$pincode}','{$bloodgroup}')") 
		or die("Error". mysqli_error($connection));

	if($q){
		echo "<script>alert('Record Added');</script>";
	}

}


?>

<html>
<body>
	<form method="post">
            <table>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="txt1" /> <br/> <br/></td>
			</tr>
                        <tr>
				<td>Gender : </td>
				<td><select name="txt2">
					<option>Male</option>
					<option>Female</option></select></td>
			</tr>
                        <tr>
				<td>Date of Birth : </td>
                                <td><input type="date" name="txt3" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="txt4" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="Number" name="txt5" /><br/> <br/></td>
			</tr>
                        <tr>
				<td>Address : </td>
				<td><textarea name="txt6" cols="50" rows="5"></textarea><br/> <br/></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="txt7" /><br/> <br/></td>
			</tr>
                        <tr>
				<td>Area : </td>
				<td><input type="text" name="txt8" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Pincode : </td>
				<td><input type="Number" name="txt9"><br/> <br/></td>
			</tr>
			<tr>
				<td>Blood Group : </td>
				<td><input type="text" name="txt10" /><br/> <br/></td>
			</tr>
			
			
			<tr>
				<td><input type="submit" /></td>
				<td><input type="reset" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
