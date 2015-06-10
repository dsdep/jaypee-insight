<?php
session_start();
unset($_SESSION['login_usert']);
if(session_destroy()){
header("Location: ij.html");
exit();}
?>