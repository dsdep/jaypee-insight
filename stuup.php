<?php
//$batch=$_POST['batch'];
session_start();
$email=$_SESSION['login_user'];
//echo $email;
$dbLink = new mysqli('127.0.0.1', 'root', '', 'login');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
$sql ="SELECT batch FROM student WHERE email='$email'";
$result1 = $dbLink->query($sql);
if ($result1){
//echo $sql ;
//echo $rows= mysqli_num_rows($result1);
 while($obj=mysqli_fetch_object($result1)){
 //echo "y?";
       $batch=$obj->batch;
	   //echo $batch;
	   }
$quer = "SELECT id ,name ,created ,sdate FROM file WHERE batch='$batch'";
$result= $dbLink->query($quer);
//$rows = mysql_num_rows($query);

//echo $result->num_rows ;
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%">
                <tr>
                    <td><b>Name</b></td>
            <td><b>uploaded on</b></td>
			 <td><b>last date of submission</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['created']}</td>
					<td>{$row['sdate']}</td>
               <td><a href='inde1.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
 
        // Close table
        echo '</table>';
    }
 
   //  Free the result
  $result->free();
}
else
{
  echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 }
// Close the mysql connection
$dbLink->close();
//echo "<a href='studentlogin.php'> click here to go back </a>"	;
?>
