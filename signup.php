<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php
		$con = mysqli_connect('localhost','root','','ucet');
		 if(mysqli_connect_errno())
		 {
		 	echo "Failed to connect to the database" .mysqli_connect_error();
		 }
		$fnameErr=$lnameErr=$emailErr=$pwdErr=$cpwdErr="";
		$fname=$lname=$email=$pwd=$cpwd=$gender="";
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
	?>
<?php include 'index.php'; ?>
	<main>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<span class="error">*Required Field</span><br/>
		<input type="text" name="fname" placeholder="First Name"><br/>
		<span class="error">* <?php echo $fnameErr;?></span><br/>
		<input type="text" name="lname" placeholder="Last Name"><br/>
		<span class="error">* <?php echo $lnameErr;?></span><br/>
		<input type="email" name="email" placeholder="E-mail"><br/>
		<span class="error">* <?php echo $emailErr;?></span><br/>
		<input type="password" name="pwd" placeholder="Password"><br/>
		<span class="error">* <?php echo $pwdErr;?></span><br/>
		<input type="password" name="cpwd" placeholder="Confirm Password"><br/>
		<span class="error">* <?php echo $cpwdErr;?></span><br/>
		Gender:
		<input type="radio" value="male" name="gender" checked="checked">Male <input type="radio" value="Female" name="gender">Female<br/>
		<input type="submit" value="Register" name="signup"/>
		</form>		
		<?php $fnameErr=$lnameErr=$emailErr=$pwdErr=$cpwdErr=='a';?>
	</main>
	
	<?php
	$fname = mysqli_real_escape_string($con, $fname);
	$lname = mysqli_real_escape_string($con, $lname);
	$email = mysqli_real_escape_string($con, $email);
	$pwd   = mysqli_real_escape_string($con, $pwd);
	$gender= mysqli_real_escape_string($con, $gender);
if(($fnameErr=$lnameErr=$emailErr=$pwdErr=$cpwdErr)=='a')
{
    $res=mysqli_query($con,"INSERT INTO users VALUES ('$fname','$lname','$email','$pwd','$gender')");
	if($res)
	{
		echo "<center>"."Record Successfully added"."</center>";
		echo "<div class='cent'>"."Your name :".$fname." ".$lname."<br/>";
	}
	else
	{
		echo "Some Error occured";
	}
}
mysqli_close($con);
?>
	
</body>
</html>