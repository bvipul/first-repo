<html>
<title>Record status</title>
<body>
<?php include 'index.php'; ?>
</body>
</html>
<?php
		$con = mysqli_connect('localhost','root','','ucet');
		 if(mysqli_connect_errno())
		 {
		 	echo "Failed to connect to the database" .mysqli_connect_error();
		 }
		$fnameErr=$lnameErr=$emailErr=$pwdErr=$cpwdErr="";
		$fname=$lname=$email=$pwd=$cpwd="";
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["fname"]))
			{
				$fnameErr="First name can't be empty";
			}
			else
			{
				$fname=test_input($_POST["fname"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
				{
      				$fnameErr = "Only letters allowed"; 
    			}

			}
			if(empty($_POST["lname"]))
			{
				 $lnameErr="Last name can't be empty";
			}
			else
			{																									
				$lname=test_input($_POST["lname"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
				{
      				$lnameErr = "Only letters allowed"; 
    			}
			}
			if(empty($_POST["email"]))
			{
				$emailErr="Email field can't be empty";
			}
			else
			{
				$email=test_input($_POST["email"]);
				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
				{
      				$emailErr = "Invalid email format"; 
    			}
			}
			if(empty($_POST["pwd"]))
			{
				$pwdErr="Password field can't be empty";
			}
			else
			{
				$pwd=test_input($_POST["pwd"]);
			}
			if(empty($_POST["cpwd"]))
			{
				$cpwdErr="Confirm Password Do not match";
			}
			else
			{
				$cpwd=test_input($_POST["cpwd"]);
				if($pwd!=$cpwd)
				{
					$cpwdErr="Passwords Do not match";
				}
			}
			$gender=$_POST['gender'];
		}
		function test_input($data) 
		{
  			$data = trim($data);
   			$data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pwd   = mysqli_real_escape_string($con, $_POST['pwd']);
if(mysqli_query($con,"INSERT INTO users VALUES ('$fname','$lname','$email','$pwd','$gender')"))
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
