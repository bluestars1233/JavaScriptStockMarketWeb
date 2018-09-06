<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    
<link rel="stylesheet" type="text/css" href="temp.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x=icon">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
#left1{
width:60%;
float: left;


}
#right1{
	 margin-top: 150px;
	 
	float: right;
	height:300px;
	width:40%;
	
	
}
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
     
    <center><h1>CREATE REGISTRATION AND ENJOY INVESTING</h1></center>  
      <ul>
  <li><a href="temp.html">Home</a></li>
 
  <li><a href="login.php">Log In</a></li>
  

</ul>
<div id="left1">
<h3>Sign up</h3>

<div class="container">
 <form action="" method="POST">
  Name:<br>
  <input type="text" name="u_name" required><br>
 
  Email:<br>
  <input type="text" name="u_email" required><br>

Contact Number:<br>
  <input type="text" name="contact" required><br>

  
Username:<br>
  <input type="text" name="username" required><br>
Password:<br>
  <input type="text" name="pass" required><br>
  
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
$contact    = $conn->real_escape_string($_POST['contact']);
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['pass']);

$query   = "INSERT into users (u_name,u_mail,contact,username,password) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $name . "','" . $password . "')";
$success = $conn->query($query);

if (!$success) {
	echo 'nahi hua';
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For opening account with us<br>";
header('location:login.php');
}
$conn->close();
 
?>
</form>
</div>
</div>
<div id="right1">
<center><img src=ima/signin.png ></img></center>
</div>


</body>  
</html>   