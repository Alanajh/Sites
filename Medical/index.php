<html>
	<head>
		<link rel="stylesheet" type="text/css" href="medical.css"></link>
	</head>
	<body>
	<?php
		print $_POST['lname'];
	?>
		<div id="form">
		<!-- App title and logo -->
			<h3> Family Health </h3>
			
			<form action="index.php" method="post">
				First name: <input type="text" name ="fname"/><br><br>
				Last name: <input type="text" name="lname"/><br><br>
				email: <input type="text" name="email"/><br><br>
				hospital: <input type="text" name="hospital"/><br><br>
				emergency contact: <input type="text" name="econtact"/><br><br>
				emergency phone: <input type="text" name="num"/> <br><br>
				<input type="submit" name="submit"/>
			</form>
		</div>
	</body>
</html>