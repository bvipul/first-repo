<!doctype html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<title>Layout</title>
<body>
	<table>
		<tbody>
			<tr style="height:100px;">
				<td colspan="2"><header><h1>Heading</h1></header></td>
			</tr>
			<tr>
				<nav>
					<td>
						<a href="index.php">Home</a><br/>
						<a href="about.php">About</a><br/>
						<a href="signin.php">Sign in</a><br/>
						<a href="signup.php">Register</a><br/>
					</td>
				</nav>
					<td style="border-radius:5px;">
						<h2>Sign - In</h2><hr/>
							<form method="post" action="sign_validate.php">
								Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email"><br/>
								Password:<input type="password" name="pwd"><br/>
								<input type="submit" value="Sign in"><input type="reset" value="reset">
							</form>
					</td>
			</tr>
			<tr style="height:100px;">
				<td colspan="2">
					<footer>
						&copy;<?php echo date("y"); ?>
					</footer>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>