
<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	//connection function
	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	//query
	$q = mysqli_query($connection,
		"select * from tbl_student") or die(mysqli_error($connection));

	echo "<table border=1>";
	echo "<tr>";
        echo "<td>Id</td>";
	echo "<td>Name</td>";
	echo "<td>Gender</td>";
        echo "<td>DOB</td>";
        echo "<td>Email</td>";
	echo "<td>Mobile</td>";
        echo "<td>Address</td>";
        echo "<td>Passwd</td>";
        echo "<td>Area</td>";
        echo "<td>Pincode</td>";
        echo "<td>Bloodgroup</td>";
               
	echo "<td>Action</td>";
	echo "</tr>";
	
	while ($row = mysqli_fetch_array($q)) {
		echo "<tr>";
		echo "<td>{$row['st_id']}</td>";
		echo "<td>{$row['st_name']}</td>";
		echo "<td>{$row['st_gender']}</td>";
                echo "<td>{$row['st_dob']}</td>";
                echo "<td>{$row['st_email']}</td>";
                echo "<td>{$row['st_mobile']}</td>";
                echo "<td>{$row['st_address']}</td>";
                echo "<td>{$row['st_passwd']}</td>";
                echo "<td>{$row['st_area']}</td>";
                echo "<td>{$row['st_pincode']}</td>";
                echo "<td>{$row['st_bloodgroup']}</td>";
		
                echo "<td><a href='DELETE.php?deleteid={$row['st_id']}'> Delete </a></td>";
		echo "</tr>";
                }
             
          echo "</table>";

	echo "<a href='Insertrecord.php'> Add Record </a>";
	
?>