<?php
session_start();
$username=$_SESSION['login_usert'];
//$ba=$_POST['batch'];
//$yr=$_POST['year'];//$sub=$_POST['subject'];//$pass=$_POST['password'];//$name=$_POST['tname'];
$dbLink = new mysqli('127.0.0.1', 'root', '', 'login');//echo "d";
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());}
$sql1 = "SELECT * FROM teacher WHERE username='$username' ";
$result1 = $dbLink->query($sql1);
if ($result1){// Query for a list of all existing files
echo "f";
$sql = "SELECT * FROM file WHERE teacher='$username' ";
$result = $dbLink->query($sql);// Check if it was successfull
if($result) {// Make sure there are some files in there
    echo "g";
	if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';}
    else {// Print the top of a table
        echo '<table width="100%">
                <tr>
				<td><b>year</b></td>
                    <td><b>batch</b></td>
					<td><b>subject</b></td>
					 <td><b>Name</b></td>
                     <td><b>Created</b></td>
                    <td><b>LAST DATE OF SUBMISSION;</b></td>
                </tr>'; // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
				<td>{$row['year']}</td>
				    <td>{$row['batch']}</td>
					<td>{$row['subject']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['created']}</td>
               <td>{$row['sdate']}</td>
                </tr>";} // Close table
        echo '</table>'; }// Free the result
    $result->free();}
else{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";} }// Close the mysql connection
$dbLink->close();
echo "<a href='u.php'> click here to go back </a>"	;
?>
