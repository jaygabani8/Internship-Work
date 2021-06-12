<!DOCTYPE html>
<html>
  <title>php form demo</title>
<head>
<style>
.myDiv {
  border: 5px outset red;
  background-color:#FBC6A4;
  text-align: center;
}

td {
  width: 250px;
}

.error {
  color:F4A9A8;
}
</style>
</head>
<body>

<p><span class="error">* required field</span></p>
<center>

<?php

$nameErr = $emailErr =  $mobileErr = $dobErr = "";
$name = $email =  $mobile =  $dob = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

   if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile Number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }

    if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="myDiv">
  <table border="0px">

<tr>
  <td> <b> Full Name </b> </td>
  <td> <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span> </td>
</tr>

<tr>
  <td> <b> Email </b> </td>
  <td> <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span> </td>
</tr>

<tr>
  <td> <b> Mobile Number </b> </td>
  <td> <input type="Number" name="mobile" value="<?php echo $mobile;?>">
    <span class="error">* <?php echo $mobileErr;?></span> </td>
</tr>

<tr>
  <td> <b> D.O.B. </b> </td>
  <td> <input type="date" name="dob" value="<?php echo $dob;?>">
    <span class="error">* <?php echo $dobErr;?></span> </td>
</tr>
<tr>
  <td> </td>
  <td> <input type="submit" name="submit" value="Submit"> </td>
</tr>

</table>
</div>
</form>
</center>
<br><br>

<h2>Your Input:</h2>
<br>
<div class="myDiv">

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $dob;
echo "<br>";
?>

</div>
</body>
</html>
