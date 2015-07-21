<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Menu</title>
</head>
<body>
<script src="https://www.google.com/jsapi?key=YOUR_GOOGLE_KEY"></script>
	<div id="sidebar">
		<a href="lang=en" rel="en"><h4> English </h4><hr></a>
		<a href="lang=es" rel="es"><h4> Spanish </h4><hr></a>
		<a href="lang=fr" rel="fr"><h4> French </h4><hr></a>
		<h4> German </h4><hr>
	</div>
	<div id="menuBar">
		<a href="http://www.example.com/index.php">Home</a> - 
		<a href="http://www.example.com/about.php">About Us</a> - 
		<a href="http://www.example.com/links.php">Links</a> - 
		<a href="http://www.example.com/contact.php">Contact Us</a> <br />
	</div>
	<div id="menuOptions">
		<button type="button" id="patientBtn" onclick="patientFunction()">Patient Information</button>
		<button type="button" id="medicineBtn" onclick="medicineFunction()">Medicine Information</button><br>
		<button type="button" id="ailBtn" onclick="ailFunction()" title="Symptoms, ailments, emotions">Symptoms</button>
		<button type="button" id="contactBtn" onclick="contactFunction()">Contacts</button><br>
		<button type="button" id="financialsBtn" onclick="financialFunction()">Financials</button>
		<button type="button" id="apptBtn" onclick="appointmentFunction()" title="Stay current with your Doctor's appointments for a healthy life." value="appointments.php">Appointments</button>	
		
		<!-- JAVASCRIPT -->
			<script>
				function patientFunction(){
					alert("We at Harmon Pravst believe in the saftey and security of your personal information and will protect all your information 24/7");
				}
				function medicineFunction(){
					alert("It is important to follow our Dr.'s instructions when taking medication");
					alert("It is also important to wear a medical alert bracelet or carry a medical card notifying others of your condition(s)");
				}
				function contactFunction(){
					alert("The contact information of your emergency contacts, such as, family, friends, doctors, nurses and more are very important to have on hand at all times")
				}
				function ailFunction(){
					alert("How are you feeling today?");
				}
				function financialFunction(){
					alert("Money due");
				}
				function appointmentFunction(){
					alert("appointments");
					window.open('appointments.php');
				}
			</script>
			
	</div>
	
</body>
</html>