<?php
$dbLink = new mysqli('127.0.0.1', 'root', '', 'login');//echo "d";
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());}
	session_start();
$username=$_SESSION['login_user'];
$sql1 = "SELECT email,batch,year,branch FROM student WHERE email='$username'";
$result1 = $dbLink->query($sql1);
		if ($result1){
		 while($obj= mysqli_fetch_object($result1)){
	   $email=$obj->email;
	   $batch=$obj->batch;
	   $year=$obj->year;
	 }
	  $sql = "SELECT id, teacher , notice, batch,year,date,branch FROM notice WHERE batch='$batch' AND year='$year' ";
$result = $dbLink->query($sql);// Check if it was successfull
if($result) {// Make sure there are some files in there
	if($result->num_rows == 0) {
        echo '<p>There is no new notice</p>';}
    else {// Print the top of a table
        echo '<table width="100%">
                <tr>
				<td><b>teacher</b></td>
                    <td><b>notice</b></td>
                    <td><b>date</b></td>
                    <td><b>batch</b></td>
					 </tr>'; // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
				<td>{$row['teacher']}</td>
                    <td>{$row['notice']}</td>
                    <td>{$row['date']}</td>
              <td>{$row['batch']}</td>
                </tr>";} // Close table
        echo '</table>'; }// Free the result
    $result->free();}
else{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";}} // Close the mysql connection
$dbLink->close();
?>
