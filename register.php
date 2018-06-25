<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="POST" id="idForm">
<label>Username:</label>
<input type="text" name="username" placeholder="Username" required />
<label>Your mail:</label>
<input type="email" name="email" placeholder="example@example.com"
<label>Password:</label>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submitbtn" value="Register">

<p><a href="login.php">Already have an account?</a></p>
</form>
<h1><span>Become</span> beautiful!</h1>

</body>
</html>
 



<?php


   $conn = mysqli_connect('localhost', 'root','','project');


if (isset($_REQUEST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($conn,$username); 
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn,$email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn,$password);
    $query = "INSERT into `users` (username, password, email)
VALUES ('$username', '".md5($password)."', '$email')";
    $result = mysqli_query($conn,$query);
    if($result){
        echo "<div class='ans'>
<h3>You have registered successfully.</h3>";
    }
}
    ?>