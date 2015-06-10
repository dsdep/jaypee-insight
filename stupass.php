<?php
// Initialize Variables To Null.
$enrollment=$_POST['enrollment']; 
$email=$_POST['email'];; // Sender's Email ID
//$nameError ="";
//$emailError ="";
//$successMessage ="";
//$passwordMessage ="";
//On Submitting Form Below Function Will Execute
/*if(isset($_POST['submit']))
{
// Checking Null Values In Message
//if (!($_POST["name"]== "")){
//$name = $_POST["name"];
// Check Name Only Contains Letters And Whitespace
//if (preg_match("/^[a-zA-Z ]*$/",$name)){
if (!($_POST["email"]=="")) {
$email =$_POST["email"]; // Calling Function To Remove Special Characters From Email
// Check If E-mail Address Syntax Is Valid Or Not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing Email(Remove Unexpected Symbol like <,>,?,#,!, etc.)

if (filter_var($email, FILTER_VALIDATE_EMAIL)){*/
// Generating Password
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$password = substr( str_shuffle( $chars ), 0, 8 );
$password1= sha1($password); //Encrypting Password
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection With Server..
$db = mysql_select_db("login", $connection); // Selecting Database
//$result = mysql_query("SELECT enrollment,email FROM student WHERE email='$email'");
//$data = mysql_num_rows($result);
//if(($data)==0){
// Insert query
$query = mysql_query("insert into stpass(enrollment, email, password) values ('$enrollment', '$email', '$password1')");
if($query){
echo 'sucess';
}
//$to = $email;
//$subject = 'Your registration is completed';
/* Let's Prepare The Message For The E-mail */
/*$message = 'Hello'.$enrollment.'
Your email and password is following:
E-mail: '.$email.'
Your new password : '.$password.'
Now you can login with this email and password.';
/* Send The Message Using mail() Function */
/*if(mail($to, $subject, $message ))
{
$successMessage = "Password has been sent to your mail, Please check your mail and SignIn.";
}
}

else{
$emailError = "This email is already registered, Please try another email...";
}
//else{
//$emailError = "Invalid Email"; }
}
else{
$emailError = "Email is required";
}
}
//else{
//$nameError = "Only letters and white space allowed";
//}

//else {
//$nameError = "Name is required";
//}
}*/
else {
echo 'not sucess';
}

?>