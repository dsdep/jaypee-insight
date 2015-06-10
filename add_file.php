 <?php
if(isset($_FILES['uploaded_file'])) { 
 if($_FILES['uploaded_file']['error'] == 0) {
	session_start();
	$username=$_SESSION['login_usert'];
	$batch=$_POST['batch'];
	$subject=$_POST['subject'];
	$year=$_POST['year'];
	$sdate=$_POST['sdate'];
        $dbLink = new mysqli('127.0.0.1', 'root', '', 'login');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
	$sql="SELECT * FROM teacher WHERE batch='$batch' AND username='$username' AND year='$year'";
		$resultt = $dbLink->query($sql);
		if ($resultt)
		{
 while($obj=mysqli_fetch_object($resultt)){
  $user=$obj->username;
	   $yr=$obj->year;
	   $bat=$obj->batch;
	   $sub=$obj->subject;}
	   if(($user==$username) && ($bat== $batch) && ($yr==$year) && ($sub==$subject) ){
	  $sd= "SELECT * FROM file WHERE batch='$batch' AND year='$year' AND teacher='$user' AND subject='$subject'";
	   $res = $dbLink->query($sd);
		if($res){
	$row_cnt = mysqli_num_rows($res);
		if($row_cnt == 0){ $query = "INSERT INTO file (teacher ,name, mime, size, data, created, batch,subject,year,sdate)VALUES('{$username}', '{$name}', '{$mime}', '{$size}', '{$data}', NOW(), '{$batch}', '{$subject}', '{$year}','{$sdate}')"; 
        $result = $dbLink->query($query);		if($result) {
            echo 'Success! Your file was successfully added!';
       echo' <script type="text/javascript"> 
        alert ( "successfully submitted:");
window.location="u.php"</script>';
	    }
	  else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";}
		}
	else{ 
	if($row_cnt > 0){
		echo ' <script type="text/javascript"> 
        alert ( "already uploaded:");
window.location="u.php"</script>';}
 }
	}
else{
	echo "file sql";
	}
	}
 else{ echo ' <script type="text/javascript"> 
        alert ( "PLS CHOOSE YOUR OWN BATCH/SUBJECT/YEAR");
window.location="u.php"</script>';}   
}
else{ echo "teacher sql";}
}
  else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);}
		   
   $dbLink->close();
   include('upload.php');
}
  else {
    echo 'Error! A file was not sent!';
}
echo "<a href='u.php'> click here to go back </a>";
?>