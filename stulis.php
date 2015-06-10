<?php
$batch=$_POST['batch'];
$year=$_POST['year'];//$sub=$_POST['subject'];//$pass=$_POST['password'];//$name=$_POST['tname'];
$dbLink = new mysqli('127.0.0.1', 'root', '', 'login');//echo "d";
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());}
	session_start();
$username=$_SESSION['login_usert'];
$sql1 = "SELECT subject FROM teacher WHERE username='$username' AND batch='$batch' and year='$year'";
$result1 = $dbLink->query($sql1);
		if ($result1){
		 while($obj= mysqli_fetch_object($result1)){
	   $subject=$obj->subject;
	 }
	  
$sql = "SELECT id,enrollment ,name ,created FROM file1 WHERE batch='$batch' AND year='$year' AND subject='$subject' ";
$result = $dbLink->query($sql);// Check if it was successfull
if($result) {// Make sure there are some files in there
	if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';}
    else {// Print the top of a table
        echo '<table width="100%">
                <tr>
				<td><b>student enrollment</b></td>
                    <td><b>file Name</b></td>
                    <td><b>Created</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>'; // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
				<td>{$row['enrollment']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['created']}</td>
               <td><a href='inde.php?id={$row['id']}'>Download</a></td>
                </tr>";} // Close table
        echo '</table>'; }// Free the result
    $result->free();}
else{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";}} // Close the mysql connection
$dbLink->close();
echo "<a href='u.php'> click here to go back </a>"	;
?>
