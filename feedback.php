<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback (fname,lname, email,contact,message)
VALUES ('$fname','$lname', '$email','$contact','$message')";

if (!mysqli_query($conn, $sql)) {
    

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<script type="text/javascript"> 
        alert ("Thank you for your feedback");
window.location="ij.html";
</script>;