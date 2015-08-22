
<html>
	<head>
		<title> Database of Contacts</title>
		<link rel="stylesheet" type="text/css" href="italy.css"></link>
	</head>
	<body>
	
			<?php
			
				if(isset($_POST['submit'])){
					
					$name = $_POST['firstname'];
					$lname = $_POST['lastname'];
					
					echo $lname;
					
				}
			
			?>
		 
	</body>
</html>