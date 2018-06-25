<?php




?>
<!DOCTYPE html>
<html>
<head>
<title>Best Website Ever</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="POST" id="idForm">
<label>Username:</label>
<input type="text" name="username" placeholder="Username" required />

<label>Password:</label>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submitbtn" value="Login">

<p><a href="register.php">Don't have an account?</a></p>
</form>
<h1><span>Hey there</span>, beautiful!</h1>

</body>
</html>
 
<?php
$conn = mysqli_connect('localhost', 'root','','project');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
         }else{
	echo "<div class='noans'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }
    ?>