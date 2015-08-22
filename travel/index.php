<!DOCTYPE html>
<html>
	<head>
		<title>Italian entrada</title>
		<link rel="stylesheet" type="text/css" href="italy.css"></link>
	<head>
	<body onLoad="var changeImages=setInterval('bannerAd()', 2000);">
	<!-- Ths script makes the menu images rotate-->

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
		
		<div id="surround">
			<div id="deco1">
			
			</div>
			<div id="navigation">
				<nav>
				
				</nav>
			</div><!-- end of "navigation" -->
		
			<div id="deco2">
			
			</div>	
		</div> <!-- end of "surround" -->
		
				<div id="section">
				<section id="leftInfo">
					<p id="city">ROMA</p>
					<p>
						Rome is without a doubt one the most beautiful cities in the world; every year millions of tourists come from around the world to admire the treasures and masterpieces of Roman art and architecture.

						But a trip to the Eternal City can be eternally confusing for first-time visitors. This guide will make it easier to uncover Rome, offering lots of practical advice that will help you discover and enjoy the city in all its glory.
						Because Rome is such a huge tourist draw, choose the date for your trip carefully. The best times of the year to visit are April, May, and late September through October. In the depths of summer, the heat and the crowds make the city nearly unbearable. August in particular should be avoided because this is the month that the entire country of Italy seems to go on vacation. Travelling too late or too early in the year can also be risky because the opening hours for many attractions are shorter, and some are closed completely.
						Airfares typically drop quite a bit when "shoulder season" begins in the early autumn, making this the optimal time to visit in my book. The days are still warm, the nights are slightly cool, and the tour groups and student mobs have mostly disappeared.
						If you can plan to stay as long as a week, you won't run out of things to do and you'll still feel like you're leaving too soon. But if your time is limited, allow at least four days to see all of Rome's major attractions. If you try to cram the entire city into a two-day span and do nothing but run from place to place furiously snapping pictures, you'll only be cheating yourself. After all, Rome wasn't built in a day and it can't be seen in one, either.
					</p>
					</section>
					<section id="rightBio">
						<div id="guy">
							<img src="guy.jpg" height="100%">
								<p id="originalP"> An Italian vacation is in your future. Haven't you worked hard enough this year? It's time to take that well deserved vacation, away from the suits and the stress. <bold>NOW </bold> is the time. </p>
						</div>
 					</section>
					
					<section id="realInfo">
					
					</section>
				</div>
			</div>
	
		<div id="toes">
			<footer>
				<br>
				<!-- when adding the "size" to the horizontal rule, I get the color I desire -->
				<hr size="0" >
				<div id="tos">Terms of Service/Contact </div>
				<br>
				<div id="shortcuts">
					<ul id="foot1">
						<a href="contact.php"><li>Contact Us</li></a>
						<a href="https://www.faa.gov/regulations_policies/"><li>FAA Regulations & Policies</li></a>
						<li>Itineraries</li>
						<a href="http://www.accuweather.com/en/world-weather"><li>Weather</li></a>
					</ul>
					<ul id="foot2">
						<li>Careers</li>
						<li>Media</li>
						<li>Advertise</li>
						<li>Feedback</li>
					</ul>
					<ul id="foot3">
						<li>Investors</li>
						<li>Trademark</li>
						<li>Privacy Policy</li>
					</ul>
					<br>
						<div id="footfoot">Harmon Co (@) 2015 All Rights Reserved</div>
						
						
						add facbook, twitter, and other crap likes and such...
				</div>
			</footer>
		</div>
	</body>
</html>
