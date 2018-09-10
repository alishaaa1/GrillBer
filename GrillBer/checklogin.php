<?php
session_start();
require_once('connect.php');

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connection, $sql);

// If result matched $myusername and $mypassword, table row must be 1 row
if(mysqli_num_rows($result)==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $username;
$_SESSION['password']; 
header("location:index.php");
}
else {
echo "Wrong Username or Password";
}
?>



