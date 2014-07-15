<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php include 'index.php'; ?>
	<main>
			<h2>Sign - In</h2><hr/>
			<form method="post" action="sign_validate.php">
			Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email"><br/>
			Password:<input type="password" name="pwd"><br/>
			<input type="submit" value="Sign in"><input type="reset" value="reset">
			</form>
	</main>
</body>
</html>