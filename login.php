<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$enrollment=$_POST['enrollment'];
$dob=$_POST['dob'];
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$year=$_POST['year'];
$phone=$_POST['phone'];
$email=$_POST['email'];

 //Encrypting Password
//$connection = mysql_connect("localhost", "root", "");
// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
echo "no";
  die("Connection failed: " . mysql_connect);
}
$db = mysql_select_db("login", $conn);
$password1 = substr(hash('sha512',rand()),0,9);

//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
//$password2 = substr( str_shuffle( $chars ),0,8);
//$password1= md5($password2);
/* if $acces = 0 everything is perfect so the system send a confirmation mail 
                               // if($acces == 0) 
   print("<br>A mail has been send to " . $email . "<br><br>") ; 

     prepare the vars 
    $activ = $email . $password1 ; 
    $code = md5($activ) ; 
     to how send to mail 
    $to = $email ; 
    prepare the subject  
    $subject = "You need to confirm you registration to " . $_SERVER['SERVER_NAME'] ; 
   start writing the message
    $message = "Hello " . $email . ",\r\n\r\n" ; 
    $message .= "Thank you for registering at " . $_SERVER['SERVER_NAME'] . " Your account is created and must be activated before you can use it.\r\n" ;
    $message .= "To activate the account click on the following link or copy-paste it in your browser :\r\n\r\n" ; 
    $message .= "http://" . $_SERVER['HTTP_HOST'] . "/~carron/registration/register_send.php?user=" . $email . "&activation=" . $code . "\r\n\r\n" ; 
    $message .= "After activation you may login to http://" . $_SERVER['SERVER_NAME'] . " using the following username and password:\r\n\r\n" ; 
    $message .= "Username - " . $email . "\r\nPassword - " . $password1 . "\r\n" ; 

   To send HTML mail, you can set the Content-type header.  
    $headers  = "MIME-Version: 1.0"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1"; 

    set up additional headers 
    $headers .= "To: " . $to . "<br>\n" ; 
    $headers .= "From: " . $from . $addmail ; 
require_once('class.phpmailer.php');
define('SMTPSERVER', 'mail.yourcompany.com');// sec. smtp server
define('SMTPUSER', 'info@yourcompanyname.com'); // sec. smtp username
define('SMTPPWD', '123456'); // sec. password

$useremail = 'mail@mail.com';
$msg = 'your text here';
$from = 'info@yourcompanyname.com';
$mailTest=new EmailService();
if ($mailTest->generalMailer($useremail, $from, 'Yoursite.com', 'Your company name', $msg)) {
} else {
    if (!$mailTest->generalMailer($useremail, $from, 'Yoursite.com', 'Your company name', $msg)) {
        if (!empty($error)) echo $error;
    } else {
        echo 'Yep, the message is send (after hard working)';
    }
}
header("location:forms.html?email_msg=Email sent successfully");
         
    writing data in the base*/  
   $sql= "INSERT INTO student (first_name,last_name, enrollment,dob,branch,batch,year,phone,email,password1)
VALUES ('$first_name','$last_name', '$enrollment','$dob','$branch','$batch','$year','$phone','$email','$password1')";
   $result = mysql_query($sql,$conn); 

    if ($result == false) {
        die("Failed " . $sql); }
   /* else 
       { 
		
            everything went well so we can mail it now 
			   mail($to, $subject, $message, $headers);
} */








/*$sql = "INSERT INTO student (first_name,last_name, enrollment,dob,branch,batch,year,phone,email,password1)
VALUES ('$first_name','$last_name', '$enrollment','$dob','$branch','$batch','$year','$phone','$email','$password1')";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript"> alert("successfully registered") </script>'; }

 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/


mysql_close($conn);
?>
<script type="text/javascript"> 
        alert (' "please confirm your registration by logging in with following password:"<?php echo $password1 ?>');
window.location="forms.html";
</script>;


 