<?php
$connect = mysqli_connect('localhost','root','','test');
 if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE username='".$username."'AND password='".$password."'";
  $result = mysqli_query($connect,$sql);
  if(mysqli_num_rows($result)==1){
	  echo 'correcct';
   header('location:temp.html');
  }else {
   echo 'wrong login';
  }
 }
?>


  
<!doctype html>  
<html>  
<head>  
<title>Login</title>  
<link rel="stylesheet" type="text/css" href="temp.css">
 <style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
	background-color: #DDE2DD;
}
#left1{
width:60%;
float: left;


}
#right1{
	float: right;
	height:300px;
	width:40%;
	 margin-top: 50px;
	
}
input[type=submit] {
    background-color: #4CAF50;
    color: #FA8072;
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
     <center><h1>WEL COME!!</h1></center>  
	 <h2>Please enter your password and username for log in</h2>
   <ul>
  <li><a href="temp.html">Home</a></li>
 
  <li><a href="registration.php">New Account</a></li>
  

</ul>
<div id="left1">
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="username"><br />  
Password: <input type="text" name="password"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
</div>
<div id="right1">
<center>
<img src=ima/signin.png></img>
</center>
</div> 	
</body>  
</html>