<?php
$spaceID = getenv('SPACEID');
$accessToken = getenv('ACCESSTOKEN');
$endpoint = getenv('ENDPOINT');

$query = "query {
  priceScheduleCollection(order: orderId_ASC, limit:5, where: {show: true}) {
    items {
      season
      show
      pax2
      pax3
      pax4
      pax5
      pax6
      pax7
      pax8
    }
  }";

$data = array ('query' => $query);
$data = http_build_query($data);
echo $data;
$options = array(
  'http' => array(
    'header'  => sprintf("Content-Type: application/json",$accessToken),
    'method'  => 'POST',
    'content' => $data
  )
);
echo $options;
$context  = stream_context_create($options);
echo $context;

$result = file_get_contents(sprintf($endpoint, $spaceID), false, $context);

if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>
<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html lang="en">
	<head>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107335403-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments)};
		  gtag('js', new Date());
		
		  gtag('config', 'UA-107335403-1');
		</script>
		<title>Island Hoppin' Charters</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<link rel="shortcut icon" href="images/favicon.png" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<meta name="description" content="Learn how to book your charter aboard ISLAND HOPPIN'. We offer special rates for children, holidays, and different packages to suit all your need while you experience the best the Virgin Islands has to offer!" />
		<meta name="robots" content="Learn how to book your charter aboard ISLAND HOPPIN'. We offer special rates for children, holidays, and different packages to suit all your need while you experience the best the Virgin Islands has to offer!" />
		<meta name="googlebot" content="Learn how to book your charter aboard ISLAND HOPPIN'. We offer special rates for children, holidays, and different packages to suit all your need while you experience the best the Virgin Islands has to offer!" />
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1 id="logo" style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Island Hoppin'</h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="Home.php">Home</a></li>
								<li>
									<a href="Boat.html">The Boat</a>
									<ul>
										<li><a href="Boat.html#specifications">Specifications</a></li>
										<li><a href="Boat.html#features">Features</a></li>
										<li><a href="Boat.html#floor">Floor Plan</a></li>
										<li><a href="Boat.html#dive">Dive Features</a></li>
										<li><a href="Boat.html#photos">Photos</a></li>
									</ul>
								</li>
								<li>
									<a href="Crew.html">The Crew</a>
									<ul>
										<li><a href="Crew.html#meet">Meet the Crew</a></li>
										<li><a href="Crew.html#experience">Experience</a></li>
										<li><a href="Crew.html#qualifications">Qualifications</a></li>
										<li><a href="Crew.html#photos">Photos</a></li>
										<li><a href="Crew.html#past">Past Crews</a></li>
									</ul>
								</li>
								<li>
									<a href="Experience.php">The Experience</a>
									<ul>
										<li><a href="Experience.php#itinerary">Sample Itinerary</a></li>
										<li><a href="Experience.php#explore">Points of Interest</a></li>
										<li><a href="Experience.php#menu">Sample Menu</a></li>
										<li><a href="Experience.php#swag">Island Swag</a></li>
										<li><a href="Experience.php#testimonials">Testimonials</a></li>
										<li><a href="Experience.php#customerVideos">Sailor Content</a></li>
									</ul>
								</li>
								<li>
									<a href="Book.php" style="font-weight:bold;">Booking</a>
									<ul>
										<li><a href="#rates">Rates</a></li>
										<li><a href="#specials">Specials</a></li>
										<li><a href="#availability">Availability</a></li>
										<li><a href="#FAQ">FAQ</a></li>
										<li><a href="#contact">Contact Us</a></li>
									</ul>
								</li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">
					
				
					<div class="container" id="rates">
						<article id="main" class="special">
							<header>
								<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">Weekly Rates</h2>
								<p>
									The table reflects the base rates of a weekly charter in the designated season. 
									Rates are <b>All Inclusive</b>. <br />Taxes, re-location fees, and permits may be extra and we encourage you to verify these with the broker/clearing house.
								</p>
							</header>
							<section>
								<?php echo $result; ?>
									<p style="text-align: center;">Rates are subject to change, please contact your broker/clearing house for the most current rates.<br /> ***All prices are in USD***</p>
							</section>
							<hr style="margin-top:-50px; margin-bottom:100px" />
							<header>
								<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif; padding-top:10px; text-align: center; font-size:2.2em;">Add-Ons</h2>
							</header>
							
							<section>
								<header>
									<h3>Sleep Aboard</h3>
								</header>
								<p>
									We know flights can be hard to arrange, so to make sure you don't miss out on anytime on the water, we offer a sleep aboard on the night before your charter. 
									The current rate is $1200 for the entire group and allows you the ability to board the vessel an entire day early!
									<br />***Based on availability and boat readiness*** 
								</p>
								
							</section>
							<section>
								<header>
									<h3>Dive Package</h3>
								</header>
								<p>
									Dive Packages are currently being created, we will be updating soon with price updates. 
									<br />***For safety reasons, cannot be combined with Captain Only Charters.***
								</p>
							</section>
							<section>
								<header>
									<h3>Fees, Commissions, & Tips (Other)</h3>
								</header>
								<p>
									<b>Fees - </b>All fees are included in the price table above. (except Captain Only Charters) 
									<br /><b>Commissions - </b>The Travel Agency charges a standard 15% commission. This is already included in the posted rates.
									<br /><b>Tips - </b>A standard 15-20% for crewed charters is not included, but strongly recommended! (They work for you - 24 hours a day!) 

								</p>
							</section>
							<hr style="margin-top:-50px; margin-bottom:100px" />
							<header>
								<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif; padding-top:10px; text-align: center; font-size:2.2em;">Reductions</h2>
							</header>
							
							<section>
								<header>
									<h3>Captain Only</h3>
								</header>
								<p>
									The Captain Only Rate is $18,000 plus all additional expenses. 
									<br /><b>Includes: </b>Captain, Linens/towels, Dishes, Flatware, Cooking Utensils/Cookware, & Toys
									<br /><b>Not Included: </b>Fuel, Water, Customs/Immigrations, Food/Liquor/Ice, Mooring/Dock Fees, *Diving, Gratuity
									<br /> ***Diving & Provisioning services can be arranged***
								</p>
							</section>
							<section>
								<header>
									<h3>Half Board</h3>
								</header>
								<p>
									The Half Board plan is great for those groups looking to eat at the restaurants ashore. The plan reduces the price $150 off per person.
									Half Board includes 7 - Breakfasts, 4 - Lunches, 3 - Dinners onboard, and the other 3 - Lunches, 4 - Dinners would be ashore at the client's expense.
									<br />***Does not combine with children discounts***
								</p>
							</section>
							<section>
								<header>
									<h3>Child Discount</h3>
								</header>
								<p>
									Island Hoppin' is family friendly, and that's why we are currently offering a $250 discount per child under 15 years old. (Max Discount - 4 Children)
									<br />***Based on the Charter Sailing date, not booking the date.***
								</p>
							</section>
							<section>
								<header>
									<h3>Less than 6 Night Charter</h3>
								</header>
								<p>
									Want to sail for less than 6 nights? We offer a rate that. All you have to do is divide the rate by 6: (Rate / 6). This is your daily rate, and it is muiltpled by the number of nights planned instead. 
									<br />***Example: ($24,000/6) = $4,000 * 5 Nights = $20,000 for a 5 Night, 8-Passenger Charter.***
								</p>
							</section>
							<p style="text-align: center;">***Halfboard and / or children's discounts do not apply when using special discounted rates***</p>
							
										
						</article>
						<hr id="specials" />
						<header style="text-align:center;">
							<h2  style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif; margin-bottom: 30px;">Charter Specials</h2>
						</header>
						<div class="row" id="specials">
							
							
							
							
							
						</div>
						<hr id="availability"/>
						<article id="main" class="special">
							<header>
								<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">Availability</h2>
								<p>
									To view the current booking availability, please click <a href="https://www.cyabrochure.com/eb/205/pyaX/5323/4//" target="_blank">Here</a>
								</p>
							</header>
						</article>
						<hr id="FAQ"/>
						<div>
							<article id="main" class="special">
								<header>
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">Frequently Asked Questions</h2>
									<h3 style="text-align:center;">Click to expand the answer.</h3>
								</header>
							
						</div>
						<hr id="contact"/>
						<article id="main" class="special">
							<header>
								<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">Contact Us</h2>
								<p>
									If you would like to plan your vacation on Island Hoppin, please contact your charter broker. 
									If you don’t have one, feel free to reach out to us and we will connect you with a professional charter broker.
									Our preferred contact email: <a href="mailto:IslandHoppinCharters@gmail.com" target="_blank">IslandHoppinCharters@gmail.com</a>. 
									
								</p>
							</header>
						</article>
						
						<div>
							<br />
							<br />
							<p style="text-align: center;">***All rates are for the entire yacht and are subject to change without notice prior to actual reservation. An additional premium maybe applied for Holiday Periods such as Christmas and New Year.***</p>
						</div>
						
					</div>
				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										
										<div class="row">
											<article class="3u 12u(mobile) special">
												<a href="#" class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="images/logo.png" alt="" /></a>
											</article>
											<article class="6u 12u(mobile) special">
											<header>
												<h3>Like what you see?</h3>
											</header>
											<p>Check out some of our social media pages.</p>
											<ul class="icons">
												<li><a href="https://www.facebook.com/IslandHoppinCharters/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://www.instagram.com/islandhoppincharters/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="mailto:IslandHoppinCharters@gmail.com" target="_blank" class="icon fa-envelope-o"><span class="label">Email Us</span></a></li>
											</ul>
											</article>
											<article class="3u 12u(mobile) special fadeshow1">
												<a href="#" class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="images/logo.png" alt="" /></a>
											</article>
										</div>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Island Hoppin' <script>document.write(new Date().getFullYear())</script>. All rights reserved.</li>
										</ul>
									</div>
							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
					var acc = document.getElementsByClassName("accordion");
					var i;
					
					for (i = 0; i < acc.length; i++) {
					  acc[i].onclick = function() {
					    this.classList.toggle("active");
					    var panel = this.nextElementSibling;
					    if (panel.style.maxHeight){
					      panel.style.maxHeight = null;
					    } else {
					      panel.style.maxHeight = panel.scrollHeight + "px";
					    } 
					  }
					}
					</script>

	</body>
</html>