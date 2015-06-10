<?php
$now=date("20y-m-d");
$today = strtotime($now);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
  die("Connection failed: " . mysql_connect);
}
$db = mysql_select_db("login", $conn);
$sql= ("DELETE from file WHERE sdate < CURDATE() ");
$result2 = mysql_query($sql,$conn); 
if ($result2 == false) {
        die("Failed " . $sql); 
}
mysql_close($conn);
?>