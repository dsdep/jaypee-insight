<?php
session_start();
unset($_SESSION['login_users']);
if(session_destroy()){
header("Location: ij.html");
exit();}
?>