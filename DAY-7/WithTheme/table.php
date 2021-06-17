<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>TGP HOTEL</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './Themepart/Menu.php';
include './Themepart/Logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="images/img.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">TGP HOTEL </a></h2>
				
				
				<div class="entry">
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

                                                    echo "<table border=1 width=50>";
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

                                                            echo "<td><a href='Delete.php?deleteid={$row['st_id']}'> Delete </a></td>";
                                                            echo "</tr>";
                                                            }

                                                      echo "</table>";

                                                    echo "<a href='WithTheme.php'> Add Record </a>";

                                               ?>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
				
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
include './Themepart/Footer.php';
?>
<!-- end #footer -->
</body>
</html>