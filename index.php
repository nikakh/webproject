<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Your Page</title>
<link rel="stylesheet" href="style2.css" />
</head>
<body>
<div class="menu">
<p>Welcome <span><?php echo $_SESSION['username']; ?>!</span><a href="logout.php">Logout</a></p>
</div>

<form class="content" method="POST">
<label style="color:white;">What's on your mind?<br></label>
<textarea name="comment" style="margin-top:10px;" placeholder="Enter text here..."></textarea>
<input type="submit" name="submit">
</form>

<div class="get_content" name="get_content">
<?php 

 $conn = mysqli_connect('localhost', 'root','','project');
$content = "SELECT * from posts;";
$result2 = mysqli_query($conn,$content);

while($fetch = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
    
    echo $fetch['comment']."<br>";
}
?>


 <?php

$conn = mysqli_connect('localhost', 'root','','project');

if (isset($_POST['submit'])){
    $comment = $_REQUEST['comment'];
     $sql = "INSERT into posts (comment) VALUES ('$comment');";
     $result = mysqli_query($conn,$sql);
    if($result){
        
    }
} 


?>


</div>


</body>
</html>

