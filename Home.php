<?php

Function getData($data){

    $url = getenv('CONTENTFULURL');
    $authorizationBearer = getenv('ACCESSTOKEN');

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, $url);

    $headers = array(
       "Content-Type: application/json",
       $authorizationBearer,
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($curl);
    //dumps all the data for from the array
    //var_dump(json_decode($response, true));
    $output = json_decode($response, true);
    return $output;

}

    $newsQuery = '{"query":"query {newsCollection (order: orderId_DESC, limit:15, where: {show: true}) {items {header update date photo {title description contentType fileName size url width height}}}}"}';
    $news = getData($newsQuery);
    //$newsCount = count($news['data']['newsCollection']['items']);
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<!-- Google tag (gtag.js) - Google Analytics GA4 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-HW283MKCHL"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'G-HW283MKCHL');
		</script>
		<title>Island Hoppin' Charters</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<link rel="shortcut icon" href="images/favicon.png" />
		<script src="assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="src/js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="src/css/swipebox.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			;( function( $ ) {
			
				$( '.swipebox' ).swipebox();
			
			} )( jQuery );
		</script>
		<meta name="description" content="ISLAND HOPPIN' is 2018 Lagoon 520 offered as a crewed charter service. Join us in sailing around the beautiful British Virgin Islands in luxury!" />
		<meta name="robots" content="ISLAND HOPPIN' is 2018 Lagoon 520 offered as a crewed charter service. Join us in sailing around the beautiful British Virgin Islands in luxury!" />
		<meta name="googlebot" content="ISLAND HOPPIN' is 2018 Lagoon 520 offered as a crewed charter service. Join us in sailing around the beautiful British Virgin Islands in luxury!" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header">
					
						
					<!-- Inner -->
						<div class="inner">
							<header>
								<h1 id="logo" style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">Island Hoppin'</h1>
								<hr />
								<p style="font-style: italic; font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">The Premier Caribbean Charter Experience</p>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="Home.php" style="font-weight:bold;">Home</a></li>
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
										<li><a href="Crew.html#experience" class="scrolly">Experience</a></li>
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
									<a href="Book.php">Booking</a>
									<ul>
										<li><a href="Book.php#rates">Rates</a></li>
										<li><a href="Book.php#specials">Specials</a></li>
										<li><a href="Book.php#availability">Availability</a></li>
										<li><a href="Book.php#FAQ">FAQ</a></li>
										<li><a href="Book.php#contact">Contact Us</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					
				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Welcome aboard Island Hoppin'</h2>
						<p>
							Where Luxury and Paradise come together.
						</p>
					</header>
				</section>

			<!-- Carousel -->
			
				<section class="carousel">
					<div class="reel">
					
						
						<article>
							<a href="Boat.html" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/lagoon52-cover.jpg" alt="" /></a>
							<header>
								<h3><a href="Boat.html">Lagoon 52 Catamaran</a></h3>
							</header>
							<p>Enjoy first class in the Caribbean aboard Island Hoppin'" </p>
						</article>

						<article>
							<a href="Crew.html#meet" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Crew/Dean&Yanabiosized.jpg" alt="Island Hoppin Crew" /></a>
							<header>
								<h3><a href="Crew.html#meet">Meet the Crew</a></h3>
							</header>
							<p>Meet Captain Dean & Chef Yana, The Best of the Virgin Islands</p>
						</article>
						
						<article>
							<a href="https://www.youtube.com/watch?v=3otdFTyUaQM" target="_blank" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/rsz_best_in_class_promo.png" alt="Island Hoppin' Wins" /></a>
							<header>
								<h3>Best In Class...</h3>
							</header>
							<p>Island Hoppin was awarded Best In Class Yacht - 2018 BVI Boat Show.</p>
						</article>

						<article>
							<a href="Experience.php#menu" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/Food.jpg" alt="Island Hoppin' Grill" /></a>
							<header>
								<h3><a href="Experience.html#menu">Whats Cookin...</a></h3>
							</header>
							<p>With the fine culinary skills aboard, you're taste buds will thank you!</p>
						</article>
						
						<article>
							<a href="Boat.html#dive" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/RMS-Rhone.jpg" alt="Diving on Island Hoppin" /></a>
							<header>
								<h3><a href="Boat.html#dive">Experience Below</a></h3>
							</header>
							<p>Island Hoppin is equipped with the Scuba and Snorkeling equipment.</p>
						</article>

						<article>
							<a href="Book.php#availability" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/island-time.jpg" alt="Island Hoppin' Availability" /></a>
							<header>
								<h3>Booking Availability</h3>
							</header>
							<p>The availability is updated frequently to help you plan your perfect vacation.</p>
						</article>

						<article>
							<a href="Boat.html#floor" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/floor-plan.jpg" alt="Island Hoppin' Floor Plan" /></a>
							<header>
								<h3>Check the Deck...</h3>
							</header>
							<p>Island Hoppin' offers 4 luxurious staterooms and much more.</p>
						</article>

						<article>
							<a href="Experience.php#explore" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/anegada-flamingo.jpg" alt="Explore on Island Hoppin'" /></a>
							<header>
								<h3>Explore the Caribbean</h3>
							</header>
							<p>Explore what the world has to offer aboard Island Hoppin'.</p>
						</article>
						
						<article>
							<a href="https://www.youtube.com/watch?v=ihZzK_QAKPc&feature=youtu.be" target="_blank" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/IHOP_video.jpg" alt="Island Hoppin' Promo Video" /></a>
							<header>
								<h3>Check out our video...</h3>
							</header>
							<p>Introducing Island Hoppin' in style. Now available on YouTube.</p>
						</article>
						
						<article>
							<a href="Experience.php#swag" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/rsz_yeti-swag.png" alt="Island Hoppin' Yeti" /></a>
							<header>
								<h3><a href="Experience.php#swag">Hoppin' Swag</a></h3>
							</header>
							<p>Check out our new Yeti Tumbler available for purchase while aboard.</p>
						</article>

						<article>
							<a href="https://youtu.be/PStvnNB12rw"  target="_blank" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/youtube-preview.jpg" alt="Island Hoppin YouTube" /></a>
							<header>
								<h3>Starring: Island Hoppin'</h3>
							</header>
							<p>Check out the complete Island Hoppin' walk-through!</p>
						</article>

						<article>
							<a href="Experience.php#itinerary" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/General/map.jpg" alt="Island Hoppin Travel Guide" /></a>
							<header>
								<h3>Sample Itinerary</h3>
							</header>
							<p>Explore a sample itinerary of your future trip! Oh the possibilities...</p>
						</article>

					</div>
				</section>

			
			<!-- News -->
			
				<div class="wrapper style1">
					<section id="features" class="container special">
						<header>
							<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">On Deck News</h2>
							<p>Stay up to date with everything happening aboard Island Hoppin'.</p>
						</header>
							<?php $i=0;
							foreach($news['data']['newsCollection']['items'] as $value) : 
								$i++; 
								if($i % 3 == 1){echo '<div class="row">';}?>
								<article class="4u 12u(mobile) special">
									<a href="<?php echo $value['photo']['url']; ?>" class="image featured swipebox" title="<?php $newsDate=date_create($value['date']); echo date_format($newsDate,"F j, Y"); ?>:  <?php echo $value['header']; ?>">
										<img class="image featured" src="<?php echo $value['photo']['url']; ?>" alt="<?php echo $value['update']; ?>" />
									</a>
									<header>
										<h3><?php echo $value['header']; ?></h3>
										<h3><i><?php $newsDate=date_create($value['date']); echo date_format($newsDate,"F j, Y"); ?></i></h3>
									</header>
									<p><?php echo $value['update']; ?></p>
								</article>
							<?php if ($i % 3 == 0) {echo "</div> <hr />";}
							endforeach;
							if ($i % 3 != 0) {echo "</div>";}?>

					</section>

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
												<a class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="images/logo.png" alt="" /></a>
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
												<a class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="images/logo.png" alt="" /></a>
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

	</body>
</html>