<?php 
    include("dab.php");  
	$id=$_GET['id'];
	echo $id;

    $fetc = "SELECT * FROM file1 where id='$id'";
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

<a href="download.php?filename=<?php echo $name;?>" </a>

<?php echo $name ;?>
</div>
<?php 
} echo " <a href='u.php'> click here to go back </a>";
?>
</body>