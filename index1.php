<?php
$name = $_POST['name'];
$comments = $_POST['comments'];
include ('db.php');
mysqli_query($con, "INSERT INTO comments(name, comments) VALUES('$name','$comments')");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");

mysqli_close($con);
?>
<html>
<head>

<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style1.css" rel="stylesheet" type="text/css">
<title>Comment Box</title>
<script src="jquery.min1.js"></script>
<script>

	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
</script>
</head>
<body>

<div id="container">

	<div class="page_content">
    	Write down a query....</br></br>
    </div>
    <div class="comment_input">
        <form name="form1" method="post">
        	<input type="text" name="name" placeholder="Name"/></br></br>
            <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;"></textarea></br></br>
           <!-- <a href="#" onClick="commentSubmit()" class="button">Post</a></br>-->
            <input type="submit" name="submit" value="Send Message" id="submit">
          </br></br>Loading previous comments...
        </form>
    </div>
   
   <div id="comment_logs">
    
 
        
    </div>
</div>
</body>
</html>