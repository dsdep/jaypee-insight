<?php 
    include("dab.php");  
	$id=$_GET['id'];
	echo $id;

    $fetc = "SELECT * FROM file where id='$id'";
	//batch ='$batch' AND year ='$year' AND subject= '$subject'";
    $result = mysql_query($fetc);
	//}
?>
<body>
<?php
while($row=mysql_fetch_array($result))
{
    $name=$row['name'];
	$mime=$row['mime'];
    ?>
<div class="rect">
<!--<img alt="down-icon" src="down-drop-icon.png" align="left" width="20" height="20" />-->

<a href="download1.php?filename=<?php echo $name;?>" </a>

<?php echo $name ;?>
</div>
<?php 
} echo " <a href='studentlogin.php'> click here to go back </a>";
?>
</body>