<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("login", $connection);
session_start();
$user_check=$_SESSION['login_users'];
$ses_sql=mysql_query("select username from heads where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection);
header('Location: stutea.html');}
?>