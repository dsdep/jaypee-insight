<?php
include('sessions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>head</title>
</head>

<body>
<form action="society.php" method="post" enctype="multipart/form-data">
        
        YEAR:<t> <t><t><t><t> <t><t><t><t><input type="text" name = "year" placeholder="1,2,3,4" required="required"><BR><BR>
      BRANCH:<t> <t><t> <t><input type="text" name = "branch" placeholder="cse/ece" required="required"><BR><BR> 
       EVENT NOTICE:<input type="message" name = "notice" placeholder="your text here" required="required"><BR><BR> 
     <br><br>
      SUBMIT: <input name ="submit" type="submit" value="submit"> </form>
</body>
<form action="logout1.php">
                            <button type="submit" value="logout" > logout </button></form>
</html>
