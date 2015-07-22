<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="art.css"></link>
		<!-- JAVASCRIPT -->
		<script src="art.js"></script>
		<!-- JQUERY -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>

	<body>
	<!-- MAIN BAR WITH LOGO -->
		<div id="menu">
			<h3>galleria d'arte Renissance</h3>
			<div id="select">
				<input type="range" min="0" max="1" value="0" step="1" width="15px" />	
			</div>	
		</div>	
	<!-- MIDDLE BAR WITH SCROLLING ARTWORK -->
		<div id="artbar" align="center">
			<div id="middle">
				<figure id="img1"><img src="C:\Users\aharmon\Desktop\Sites\Art Gallery\Renaissance\AssemblyOfGods.jpg" id="i1" width="100" height="100"></figure>
				<figure id="img2"><img src="C:\Users\aharmon\Desktop\Sites\Art Gallery\Renaissance\TheUglyDuchess_QuintenMassys.jpg" id="i2" width="100" height="100"></figure>
				<figure id="img3"><img src="C:\Users\aharmon\Desktop\Sites\Art Gallery\Renaissance\WaterLift.jpg" id="i3"width="100" height="100"></figure>
			</div>
		</div>
	<!-- CREDENTIALS AND NAVIGATIONAL ARROWS -->
		<div id="credentials">
			<div id="right">
				<input type="image" value="submit" id="btnLeft" src="left.ico" width= "64" height="64" />
				<input type="image" value="submit" id="btnRight" src="right.ico" width= "64" height="64" />
			</div>
	<!-- JQUERY -->
	<script>
		$(document).ready(function(){	
			$('#btnLeft').click(function(){
				$("figure").animate({
					'left' : "-=30px",
				});
			});
			$('#btnRight').click(function(){
				$("figure").animate({
					'left' : "+=30px"
				});
			});
		});
	</script>	
	<script>
		$(document).ready(function(){
			$("#btnLeft").click(function(){
				<!-- declare variables to determine location of images -->
				var x = $("#img1").offset();
				var l = x.left;
				var x2 = $("#img2").offset();
				var l2 = x2.left;
				var x3 = $("#img3").offset();
				var l3 = x3.left;
				<!-- alert("Top: " + x.top + " Left: " + x.left); -->
		<!-- resizing image 1 -->
				if(l <= 0 - 140){
					$("#img1").css({"float" : "right"});
				}
				else if (l <= 400 || l >= 600){
					$("#i1").css({"width" : "100", "height" : "100"});
				}
		<!-- resizing image 2 -->
				if(l2 <= 0 - 140){
					$("#img1").css({"position" : "relative"});
					$("#img2").css({"float" : "right"});
				}
				else if (l2 <= 400 || l2 >= 600){
					$("#i2").css({"width" : "100", "height" : "100"});
				}
				else if(l2 >= 400 || l2 <= 600){
							$("#i2").css({"width" : "150", "height" : "150"});
				}
		<!-- resizing image 3 -->		
				if(l3 <= 0 - 140){
					$("#img3").css({"float" : "right"});
				}
			});
		});
</script>
	<!-- BOTTOM DIV WITH COPYRIGHT AND ARROWS -->
		<div id="copyright">
			<h5> Harmon Creations Living @ 2015 </h5>
		</div>
	</body>
</html>