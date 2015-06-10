<?php
$dbLink = new mysqli('127.0.0.1', 'root', '', 'login');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());}
	  $sql = "SELECT * FROM sonotice WHERE society='cultural.society' ";
$result = $dbLink->query($sql);// Check if it was successfull
if($result) {// Make sure there are some files in there
	if($result->num_rows == 0) {
        echo '<p>There is no new notice</p>';}
    else {// Print the top of a table
        echo '<table width="100%">
                <tr>
				 <td><b>notice</b></td>
                  </tr>'; // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
				 <td>{$row['notice']}</td>
               </tr>";} // Close table
        echo '</table>'; }// Free the result
    $result->free();}
else{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";} // Close the mysql connection
$dbLink->close();
?>
