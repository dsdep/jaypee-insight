<?php
//Check if a file has been uploaded
//7
if(isset($_FILES['uploaded_file'])) {
 // Make sure the file was sent without errors
   //6
    if($_FILES['uploaded_file']['error'] == 0) {
	session_start();
	$stuname=$_SESSION['login_user'];
	//$batch=$_POST['batch'];
	$subject=$_POST['subject'];
        // Connect to the database
        $dbLink = new mysqli('127.0.0.1', 'root', '', 'login');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
 
        // Create the SQL query
		
		$sql= "SELECT enrollment ,batch,year FROM student WHERE email='$stuname'";
		$result1 = $dbLink->query($sql);
		//5
		if ($result1){
 while($obj=mysqli_fetch_object($result1)){
       $enrollment=$obj->enrollment;
	   $bt=$obj->batch;
	   $year=$obj->year;
	   echo $bt;
	   }
	   $sss="SELECT * FROM file WHERE  batch='$bt' AND subject='$subject' AND year='$year'";
		$rslt= $dbLink->query($sss);
		//4
		if($rslt){
			$row_count = mysqli_num_rows($rslt);
			// 4*
			if($row_count > 0){
		 while($obj=mysqli_fetch_object($rslt)){
  $sdate=$obj->sdate;
 // $sudate = strtotime('$sdate');
  $sb=$obj->subject;
//  echo $sb;
 // echo $subject;
  //echo $sdate;
  }
 
// 4**
  //if($subject == $sb){
	 $ss="SELECT * FROM file1 WHERE  batch='$bt' AND subject='$subject' AND year='$year'";
		$resu= $dbLink->query($ss);
	//3
	if($resu){
	$row_cnt = mysqli_num_rows($resu);
	//$date = strtotime(new DateTime());
	$date = date('Y-m-d H:i:s');
		//2
		if($row_cnt == 0) {
		        $query = " INSERT INTO file1(enrollment ,name, mime, size, data, created, batch,subject,year)
            VALUES ('{$enrollment}', '{$name}', '{$mime}', '{$size}', '{$data}', NOW(), '$bt', '$subject', '$year')";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
    //    1
		if($result) {
		
            echo 'Success! Your file was successfully added!';
	echo'		<script type="text/javascript"> 
        alert ( "successfully submitted:");
window.location="studentlogin.php";
</script>';
        }
 //1
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
//2
	else{echo ' no 2 entry';}
	}
	//3
	else {echo 'file1 sql';}
	}
	//4*
 else {echo "no assignment for this subject";}
}	//4
	else {
	echo 'file sql';}
    }
	//5 
	else{ echo 'student sql';}
	}
	//6
	else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);}
    // Close the mysql connection
    $dbLink->close();
	include('upload.php');
}
//7
else {
    echo 'Error! A file was not sent!';
}
 echo "<a href='studentlogin.php'> click here to go back </a>";
 ?>
 