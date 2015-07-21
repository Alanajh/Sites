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
				<figure id="holder"><img src="" width="100" height="100">first</figure>
				<figure><img src="" width="220" height="240">Second</figure>
				<figure><img src="" width="220" height="240">third</figure>
			</div>
		</div>
		<div id="credentials">
			<div id="rigt">
				<input type="image" value="submit" id="btnLeft" src="left.ico" width= "64" height="64" />
				<input type="image" value="submit" id="btnRight" src="right.ico" width= "64" height="64" />
		</div>
	<!-- JQUERY -->
	<script>
		$(document).ready(function(){
			$('#btnLeft').click(function(){
				$("figure").animate({
					'marginLeft' : '-=30px', //moves left
				});
			});
			$('#btnRight').click(function(){
				$("figure").animate({
					'marginLeft' : "+=30px" //moves right
				});
			});
		});
	</script>	
	<!-- BOTTOM DIV WITH COPYRIGHT AND ARROWS -->
		<div id="copyright">
			<h5> Harmon Creations Living @ 2015 </h5>
		</div>
	</body>
</html>