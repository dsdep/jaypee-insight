<?php
session_start(); 
$error=''; //if (isset($_POST['submit'])) {
if(empty($_POST['username']) || empty($_POST['password']) ) {
$error = "Username or Password is invalid";}
else{
$username=$_POST['username'];
$password=$_POST['password'];// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);// Selecting Database
$db = mysql_select_db("login", $connection);// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from teacher where password1='$password' AND username='$username'",$connection);
$rows = mysql_num_rows($query);
if ($rows) {
$_SESSION['login_usert']=$username; // Initializing Session
header("location:u.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo '<script type="text/javascript"> alert("INVALID USERNAME OR PASSWORD") </script>'; }
mysql_close($connection); // Closing Connection
}//}
?>