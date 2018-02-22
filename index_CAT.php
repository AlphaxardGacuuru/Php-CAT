<!DOCTYPE html>
<html>
<head>
	<title>HAVI High School Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #808080;">
	<fieldset style="text-align: center;padding-top: 10%; padding-bottom: 10%; width: 100%; height: 80%;">
		<h1 style="color: white;">Sign in</h1>
		<br>
		<form action="CAT_welcome.php" method="GET">
			<label><h4>Admission Number </h4><input type="username" class="form-control" name="username" placeholder="enter admission number"></label>
			<br>
			<label><h4>Password </h4><input type="Password" class="form-control" name="pws" placeholder="enter password"></label>
			<?php
			$pass=$_GET["pws"];
			$go=$_GET["username"];
			if ($pass!=$go) {
						# code...
				echo "<b style='color: red;'>Wrong Password</b>";
			} else {echo "<b style='color: red;'></b>";}
			?>
			
			<button type="submit" class="btn btn-sm btn-success">Go &rtrif;</button>
			<a href="#" style="padding-left: 10px">forgot password?</a>
			<br>
			<br>
			<button type="submit" class="btn btn-sm btn-success"><a href="CAT_sign_up.php">Create an account &rtrif;</a></button>
		</form>
	</fieldset>
</body>
</html>