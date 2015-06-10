<?php
//Сheck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $uploaded_file["name"]);
 $filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  
  if ((($ext == "pdf") && ($_FILES["uploaded_file"]["type"] == "application/pdf") && ($_FILES["uploaded_file"]["size"] < 1000000)) || (($ext == "doc") && ($_FILES["uploaded_file"]["type"] == "application/msword") && ($_FILES["uploaded_file"]["size"] < 1000000)) || (($ext == "jpg" || $ext == "jpeg") && ($_FILES["uploaded_file"]["type"] == "image/jpg") && ($_FILES["uploaded_file"]["size"] < 1000000)) || (($ext == "xls") && ($_FILES["uploaded_file"]["type"] == "application/vnd.ms-excel") && ($_FILES["uploaded_file"]["size"] < 1000000)) || (($ext == "ppt") && ($_FILES["uploaded_file"]["type"] == "application/vnd.ms-powerpoint") && ($_FILES["uploaded_file"]["size"] < 1000000)) || (($ext == "txt") && ($_FILES["uploaded_file"]["type"] == "text/plain") && ($_FILES["uploaded_file"]["size"] < 1000000))  ) {
    //Determine the path to which we want to save this file
      $newname = realpath("C:/xampp/uploads/").$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           echo "It's done! The file has been saved as: ".$newname;
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
  } else {
     echo "Error: Only .pdf files under 350Kb are accepted for upload";
  }
} else {
 echo "Error: No file uploaded";
}
?>