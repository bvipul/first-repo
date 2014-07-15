<?php 
	$con = mysqli_connect('localhost','root','','ucet');
	$mal=$_POST['email'];
	$pass=$_POST['pwd'];
	if($con)
	{
		echo "Connection Established!";
	}
	else
	{
		echo "Some error occured";
	}
	$result=mysql_query("SELECT * FROM users WHERE user_email=$mal");
	while($row=mysql_fetch_array($result))
	{
		if($row['user_email']==$mal && $row['user_password']==$pass)
		{
			echo "Welcome ".$row['user_first_name'];
		}
	}
	mysqli_close($con);

?>
