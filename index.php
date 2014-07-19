<!doctype html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<title>Layout</title>
<body>
	<table cellspacing=5px cellpadding=5px >
		<tbody>
			<tr class="row1">
				<td class="row1col1" colspan="2"><header><h1>Heading</h1></header></td>
			</tr>
			<tr class="row2">
				<nav>
					<td class="row2col1">
						<a href="index.php">Home</a><br/>
						<a href="about.php">About</a><br/>
						<a href="signin.php">Sign in</a><br/>
						<a href="signup.php">Register</a><br/>
					</td>
				</nav>
					<td class="row2col2">
						<br/><br/>
						<br/><br/>
					</td>
			</tr>
			<tr class="row3">
				<td class="row3col1" colspan="2">
					<footer>
						&copy;<?php echo date("y"); ?>
					</footer>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>