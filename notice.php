<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$year=$_POST['year'];
$notice=$_POST['notice'];
$conn = mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_connect);
}
$db = mysql_select_db("login", $conn);
session_start();
$user=$_SESSION['login_usert'];

$sql= "INSERT INTO notice (notice,teacher,date,branch,batch,year)
VALUES ('$notice','$user',NOW(),'$branch','$batch','$year')";
   $result = mysql_query($sql,$conn); 

    if ($result == false) {
        die("Failed " . $sql); }


mysql_close($conn);
?>
<script type="text/javascript"> 
        alert ("notice added");
window.location="u.php";
</script>;
