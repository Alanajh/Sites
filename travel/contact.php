<html>
	<head>
		<title>Italian entrada</title>
		<link rel="stylesheet" type="text/css" href="italy.css"></link>
	<head>
	<body onLoad="var changeImages=setInterval('bannerAd()', 2000);">
	
	    <script>
	
		var curImage="banner";
		function bannerAd(){
			if(curImage == "banner2"){
				document.images[0].src = "Italy-holidays.jpg";
				curImage = "banner3";
			}
			else if(curImage == "banner1"){
				document.images[0].src = "italy-04.jpg";
				curImage = "banner2";
			}
			else if(curImage == "banner3"){
				document.images[0].src = "italian_hills.jpg";
				curImage = "banner4";
			}
			else if(curImage == "banner4"){
				document.images[0].src = "manequine.jpg";
				curImage = "banner5";
			}
			else{
				document.images[0].src = "vintage.jpg";
				curImage = "banner1";
			}
		}
	</script>

		<!--Images for the menubar rotation -->
		<div id="menu"  class="menuPics">
			<img src="Italy-holidays.jpg">
		</div><!-- end of 'menu/menuPics' div -->
		
		<div id="menu">
			<h2 id="shadow">Italian Entrada<h2>	
			<h2 id="original">Italian Entrada<h2>	
		</div><!-- end of 'menu' div-->
		
		<div id="bottomContact">
			<h3> Contact Us: </h3>
			
	<!-- PHP for the form -->
				<form action="data.php" method="post" >
					First name:<br>
					<input type="text" name="firstname"/>
					<br>
					Last name:<br>
					<input type="text" name="lastname"//><br>
					E-mail:<br>
					<input type="email" name="email"/><br>
					<br>
					Comments: <br>
					<textarea rows="6" cols="50" maxlength="250"></textarea><br><br>
					<input type="submit" value="Submit" name="submit:"/><br>
					<h5> * 250 maximum length </h5>
					
				</form>
			<!-- Form submission -->	
			
		</div>
	</body>
</html>