<!DOCTYPE html>
<html>
<head>
	<title>HAVI High School Sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<fieldset style="text-align: center;">
		<h1>Create an account</h1>
		<br>
		<form action="CAT_welcome.php" method="GET">
			<label><input type="text" class="form-control" name="firstname" placeholder="First name" required=""></label>
			<label><input type="text" class="form-control" name="middlename" placeholder="Middle name" required=""></label>
			<label><input type="text" class="form-control" name="surname" placeholder="Surname" required=""></label>

			<div class="row testing">
				<h3>Date of Birth</h3>
			</div>
			<label><input type="Date" class="form-control" name="dob" placeholder="" required=""></label>
			<br>
			<br>
			<input type="radio" name="male" required="">Male
			<br>
			<input type="radio" name="female" required="">Female
			<br>
			<br>
			<label><input type="password" class="form-control" name="pwd" placeholder="New password" required=""></label>
			<?php
			$mary=$_GET["pwd"];
			if (strlen($mary)<10) {
					# code...
				echo "<b style='color: red;'>Weak Password</b>";
			} else {echo "<b style='color: green'>Strong</b>";
			}
			?>
			<br>
			<label><input type="password" class="form-control" name="pwd2" placeholder="Confirm password" required=""></label>
			<?php
			$jes=$_GET["pwd2"];
			if ($mary!=$jes) {
						# code...
				echo "<i style='color: red;'>Mismatch</i>";
			} else {echo "<b><i style='color: green;'>Match</i></b>";
			}
			?>
	<br>
	<br>
	<button type="reset" class="btn btn-sm btn-danger">Reset &rtrif;</button>
	<br>
	<br>
	<p><span style="font: 50%;">By Creating an account, you agree to our <a href="#">School rules</a>, including our <a href="#">Cookie Use</a> and <a href="#">Privacy Policy</a>. You may receive SMS message notifications from HAVI High School and can opt out at any time.</span></p>
	<button type="submit" class="btn btn-sm btn-success">Create account</button>
</form>
</fieldset>
</body>
</html>