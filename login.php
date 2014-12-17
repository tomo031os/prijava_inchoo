<?php
session_start(); 
if (isset($_POST['submit'])) 
{
if (empty($_POST['username']) || empty($_POST['password'])) 
{
$error="Invalid username and/or password.";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysql_connect("localhost", "root", "");

$username=stripslashes($username);
$password=stripslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

$db=mysql_select_db("users", $connection);
$query=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'", $connection);
$rows=mysql_num_rows($query);

if ($rows==1) 
{
$_SESSION['login_user']=$username; 
header("location: profile.php"); 
} 
else 
{
$error='Invalid username and/or password.'; 
}
mysql_close($connection);
}
}
?>