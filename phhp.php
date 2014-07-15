<html>
<title>Record status</title>
<body>
<?php include 'index.php'; ?>
</body>
</html>
<?php 
$con = mysqli_connect('localhost','root','','ucet');
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
if(mysqli_query($con,"INSERT INTO users VALUES ('$fname','$lname')"))
{
	echo "<center>"."Record Successfully added"."</center>";
	echo "<div class='cent'>"."Your name :".$fname." ".$lname."<br/>";
}
else
{
		echo "Some Error occured";
}
mysqli_close($con);
?>
