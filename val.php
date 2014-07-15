<html>
<body>
	<?php
	$con = mysqli_connect('localhost','root','','ucet')or die("Problem in connecting to the database!! " . mysqli_error($con));;
	echo "Connection Established!!";
	$rs="SELECT * FROM users";
	$result=mysqli_query($con,$rs);
	while($row=mysql_fetch_array($con,$result))
	{
		print $row['fname'] . "<br>";
		print $row['lname'] . "<br>";
		print $row['email'] . "<br>";
		print $row['pwd'] . "<br>";
	}
	mysqli_close($con);

	?>
</body>
</html>