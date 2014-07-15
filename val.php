<html>
<body>
	<?php
	$con = mysqli_connect('localhost','root','','ucet')or die("Problem in connecting to the database!! " . mysqli_error($con));;
	echo "Connection Established!!";
	$que="CREATE TABLE users(user_first_name CHAR(50) NOT NULL,user_last_name CHAR(50) NOT NULL)";
	if (mysqli_query($con,$que)) 
	{
  		echo "Table persons created successfully";
	}
    else
	{
  		echo "Error creating table: " . mysqli_error($con);
	}
	mysqli_close($con);	
	?>
</body>
</html>