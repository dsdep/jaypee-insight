<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("login", $connection);
session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select email from student where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['email'];
echo "session started";
if(!isset($login_session)){
echo "mr";
mysql_close($connection); // Closing Connection
header('Location: stutea.html'); // Redirecting To Home Page
}
?>