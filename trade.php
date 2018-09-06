<!doctype html>
<html>
<head>
<title>Register</title>

<link rel="stylesheet" type="text/css" href="temp.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x=icon">

<meta name="viewport" content="width=device-width, initial-scale=1">
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

    <center><h1>Wel come to trading with us </h1></center>
      <ul>
  <li><a href="temp.html">Home</a></li>


</ul>

<h3>Buy or sell </h3>



<div class="container">
  <form action="" method="post">
    <label for="name"> Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">User Name</label>
    <input type="text" id="lname" name="uname" placeholder="Your user name..">
		<label for="lname">pass word</label>
		<input type="text" id="password" name="password" placeholder="Your password..">
		<label for="lname">Date of birth</label>
		<input type="text" id="dob" name="dob" placeholder="Your DOB..">

		<label for="lname">quote</label>
		<input type="text" id="company" name="company" placeholder=" name of company that you want to buy..">

    <label for="exchange">exchange</label>
    <select id="exchange" name="exchange">
      <option value="BSE">NSE</option>
      <option value="NSE">BSE</option>

    </select>    <label for="exchange">Type of order</label>
		    <select id="exchange" name="odertype">
		      <option value="BUY">BUY</option>
		      <option value="SELL">SELL</option>

		    </select>


    <input type="submit" value="Submit" name="submit">
  </form>
</div>





<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "test";

 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
if(isset($_POST['submit'])){
$name    = $conn->real_escape_string($_POST['u_name']);
$uname   = $conn->real_escape_string($_POST['u_email']);
$dob    = $conn->real_escape_string($_POST['contact']);
$quote = $conn->real_escape_string($_POST['username']);
$price = $conn->real_escape_string($_POST['pass']);
$exchange = $conn->real_escape_string($_POST['username']);
$order = $conn->real_escape_string($_POST['pass']);
$query   = "INSERT into trade (u_name,u_mail,contact,username,password) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $name . "','" . $password . "')";
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




</body>
</html>
