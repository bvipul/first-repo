<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="text" name="fname" placeholder="First Name"><br/>
		<input type="text" name="lname" placeholder="Last Name"><br/>
		<input type="email" name="email" placeholder="E-mail"><br/>
		<input type="password" name="pwd" placeholder="Password"><br/>
		Gender:
		<input type="radio" value="male" name="gender">Male <input type="radio" value="Female" name="gender">Female<br/>
		<input type="submit" value="Register" name="signup"/>
</form>		
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$gender=$fname=$lname=$email=$err=$pwd="";
	function check($data,$err='')
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			if($err && strlen($data)==0)
			{
				die($err);
			}
			return $data; 
		}
	$fname=check($_POST['fname'],"The First Name Field can't be empty");
	$lname=check($_POST['lname'],"The Last Name Field can't be empty");
	$email=check($_POST['email'],"The Email Field can't be empty");
	$pwd=check($_POST['pwd'],"The Password Field can't be empty");
	$pwd=md5($pwd);
	$gender=check($_POST['gender']);
	echo "Your First Name is ".$fname."<br/>";
	echo "Your Last Name is ".$lname."<br/>";
	echo "Your Email is ".$email."<br/>";
	echo "Your Password is ".$pwd."<br/>";
	echo "Your Gender is ".$gender;
	} 
?>
</body>
</html>
https://github.com/remy/html5demos.git