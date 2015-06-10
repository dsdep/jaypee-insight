<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message//if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password']) ) {
$error = "Username or Password is invalid";}
else{
$email=$_POST['email'];//$tname=$_POST['username'];
$password=$_POST['password'];// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");// To protect MySQL injection for Security purpose
$email = stripslashes($email);//$tname = stripslashes($tname);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);//$tname = mysql_real_escape_string($tname);
$password = mysql_real_escape_string($password);// Selecting Database
$db = mysql_select_db("login", $connection);// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from student where password1='$password' AND email='$email'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header("location: studentlogin.php"); // Redirecting To Other Page
} 
else {
$error = "Username or Password is invalid";
echo '<script type="text/javascript"> alert("INVALID USERNAME OR PASSWORD")
window.location="forms.html" ; 
</script>'; }
mysql_close($connection); // Closing Connection
}//}
?>
