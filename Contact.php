
<!doctype html>  
<html>
<head>

<title>Invest with Technology
</title>
<link rel="stylesheet" type="text/css" href="temp.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x=icon">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>

<body>
<div id="nav">
<ul>
  <li><a href="temp.html">Home</a></li>
  <li><a href="https://www.nseindia.com">News</a></li>
  <li><a href="registration.php">New Account</a></li>
  <li><a href="tem.html">Portfolio</a></li>
   <li><a href="https://www.moneycontrol.com">Market</a></li>
  <li><a href="tem.html">Mutual fund</a></li>
  <li><a href="tem.html">Search price</a></li>
  <li><a href="login.php">Sign In</a></li>

</ul>
</div>

<div id="MainField">
<h3>Contact Form</h3>

<div class="container">
 <form action="" method="POST">
  Name:<br>
  <input type="text" name="u_name" required><br>
 
  Email:<br>
  <input type="text" name="u_email" required><br>

Subject:<br>
  <input type="text" name="subj" required><br>

Message:<br>
  <input type="text" name="message" required><br>
<input type="submit" value="Submit" name="submit"><br>

<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "test";

 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
if(isset($_POST['submit'])){
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$subj    = $conn->real_escape_string($_POST['subj']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into contact (u_name,u_email,subj,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {
	echo 'nahi hua';
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Contacting Us <br>";
}
$conn->close();
 
?>
</form>
</div>
<div id="footer">
<p>All right reserved</p>
<p>This is mini project of 16bit101 and 16bit118, </p>
<h5 class="cen"> Project title: Implement stock trading web-site .</h5>
<h5 class="cen"> Project status: working</h5>
<h5 class="cen"> Project guide: Prof . Bhadreshsinh gohil</h5>
<h5 class="cen"> Project By: 16bit101 patel shreeshiv</h5>
<h5 class="cen">  		16bit118   Mayank kedia</h5>

</div>

</body>
</html>