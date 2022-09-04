<?php     

    function ellipsis($text, $max=100, $append='&hellip;') {
       if (strlen($text) <= $max) return $text;
       $out = substr($text,0,$max);
       if (strpos($text,' ') === FALSE) return $out.$append;
       return preg_replace('/\w+$/','',$out).$append;
	}
	
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

    $foodImagesQuery = '{"query":"query {foodImagesCollection (order: orderId_DESC, where: {show: true}) {items {title date photo {title description contentType fileName size url width height}}}}"}';
    $foodImages = getData($foodImagesQuery);
    
    $testimonialsQuery = '{"query":"query {customerTestimonialsCollection (order: orderId_DESC, where: {show: true}) {items {orderId title headline testimonial trips starCount crew date spaceFlag}}}"}';
    $testimonials = getData($testimonialsQuery);
    
    $customerPhotosQuery = '{"query":"query {customerPhotosCollection (order: orderId_DESC, where: {show: true}) {items {title date photo {title description contentType fileName size url width height}}}}"}';
    $customerPhotos = getData($customerPhotosQuery);
    
    $customerVideosQuery = '{"query":"query {customerVideosCollection (order: orderId_DESC, where: {show: true}) {items {title date url photo {title description contentType fileName size url width height}}}}"}';
    $customerVideos = getData($customerVideosQuery);
?>
<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
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
		<!-- Remember to include jQuery :) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<!-- jQuery Modal -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
			
				$( '.swipebox1' ).swipebox();
			
			} )( jQuery );
		</script>
		<script type="text/javascript">
			;( function( $ ) {
			
				$( '.swipebox2' ).swipebox();
			
			} )( jQuery );
		</script>
		<style>
			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}
			.modal {
				max-width: 80%;
			}
		@media all and (max-width: 737px) {
		    .hideoffscreen { display: none; }
		}
		
		@media (min-width: 700px) {
   			.modal-size {
      			width: 90%; 
   			}
		}
		
		.tooltip {
		  position: relative;
		  display: inline-block;
		  border-bottom: 1px dotted black;
		}
		
		.tooltip .tooltiptext {
		  visibility: hidden;
		  width: 350px;
		  font-family: 'Shadows Into Light';
		  background-color: #0066CC;
		  color: white;
		  text-align: left;
		  border-radius: 6px;
		  padding: 10px 15px 10px;
		
		  /* Position the tooltip */
		  position: absolute;
		  z-index: 1;
		  top: 120%;
		  left: 40%;
		  margin-left: -70px;
		}
		
		.tooltip:hover .tooltiptext {
		  visibility: visible;
		}

		</style>
		<meta name="description" content="The experience offered aboard ISLAND HOPPIN' will make never want to go on a different vacation again! From diving shipwrecks to experiencing castaway islands, ISLAND HOPPIN' provides a one in a lifetime adventure for all those join!" />
		<meta name="robots" content="The experience offered aboard ISLAND HOPPIN' will make never want to go on a different vacation again! From diving shipwrecks to experiencing castaway islands, ISLAND HOPPIN' provides a one in a lifetime adventure for all those join!" />
		<meta name="googlebot" content="The experience offered aboard ISLAND HOPPIN' will make never want to go on a different vacation again! From diving shipwrecks to experiencing castaway islands, ISLAND HOPPIN' provides a one in a lifetime adventure for all those join!" />
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1 id="logo" style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif; ">Island Hoppin'</h1>
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
									<a href="Experience.php" style="font-weight:bold;">The Experience</a>
									<ul>
										<li><a href="#itinerary">Sample Itinerary</a></li>
										<li><a href="#explore">Points of Interest</a></li>
										<li><a href="#menu">Sample Menu</a></li>
										<li><a href="#swag">Island Swag</a></li>
										<li><a href="#testimonials">Testimonials</a></li>
										<li><a href="#customerVideos">Sailor Content</a></li>
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

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%" id="itinerary">
							<div class="8u 12u(mobile)" id="content">
								<article id="main">
									<header>
										<h2  style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sample Itinerary</h2>
										<p>
											The world is your playground, enjoy it aboard Island Hoppin'!
										</p>
									</header>
									<img class="image featured" src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/map.png" alt="BVI Map" />
									<p>
										This is your special trip, and you should be able to pick where you want to go. So our crew will work with you to 
										design your itinerary to fit all the wonderful places to see!
									</p>
									<section>
										<header>
											<h3>Welcome Aboard (Sleep Aboard)</h3>
										</header>
										<p>
											Island Hoppin’ offers guest (on availability) to sleep aboard the boat the night before you set sail. 
											The advantage of stepping aboard the day before allows everyone to get settled faster and start enjoying 
											the vacation the moment you set foot on Island Hoppin’. The additional cost can be found on the booking page.

										</p>
									</section>
									<section>
										<header>
											<h3>Day 1</h3>
										</header>
										<p>
											Let’s set sail! The trip begins by boarding Island Hoppin’ in St. Thomas, US Virgin Islands.  
											We start the day off by touring the boat, procedures, and of course drinks. 
											We set sail to Frances Bay in St. John, U.S.V.I. for an afternoon of exploring and gorgeous views.  
											Kayak, snorkel or master the stand-up paddleboards in the soothing bay.  
											Dinner is served under the night sky while we prepare for tomorrow’s adventure. 

										</p>
									</section>
									<section>
										<header>
											<h3>Day 2</h3>
										</header>
										<p>
											After breakfast, Island Hoppin’ heads to the west of Tortola (Sopers Hole). 
											Sopers Hole offers shops and a very local experience of the Islands. 
											After lunch, we head to Norman Island. Before reaching the destination, 
											the crew sets anchor for some diving and snorkeling action by the Caves. 
											Norman Island is also referred to as “Treasure Island”, 
											as legend has it that buried pirate treasure lays below. 
											While glazing on the sun setting, you get to sip on your favorite 
											drink and snack on a freshly prepared hors d’oeuvre.  
											Dinner is served in the open air of the aft deck, or if you prefer, in the spacious salon. 
											Ashore is the Pirates Pub Bar & Grill, nights gather a fun crowd and music keeps the night alive. 
											Don’t worry about the noise though, nights dwindle down earlier on island time.  

										</p>
									</section>
									<section>
										<header>
											<h3>Day 3</h3>
										</header>
										<p>
											After a gourmet breakfast, we depart to the Indians for additional snorkeling and diving. 
											The rocks protrude above the waterline; however, under the sea, the view is entirely different. 
											The reef is full of life, and your crew will be there to help identify any that you need help with. 
											After being served lunch, set sail to Cooper Island.   Cooper Island has a beautiful beach, 
											with a plenty of exploring opportunities. The island is also home to a restaurant/brewery. 
											The scenery is unique, and the snorkeling off the shore offers the best place to view sea turtles and spotted eagle rays.  
											For divers, the famous “Wreck Alley” is located just meters away. The crew will prepare cocktails and hors d’oeuvres, 
											followed by a delicious dinner.

										</p>
									</section>
									<section>
										<header>
											<h3>Day 4</h3>
										</header>
										<p>
											After a delicious breakfast, you depart Cooper Island for a short sail to Salt Island. 
											The Wreck of the RMS Rhone is just below and gives divers an experience of a lifetime. 
											Salt Island also offers salt ponds and a local village for handmade goods. 
											Lunch is then served on the boat after the dive. (As diving ends once the first drink begins.) 
											After lunch, we depart to Trellis Bay, home of the famous full moon parties. 
											The location offers live music, stilt dancers, fire jugglers, and BBQ. (Monthly parties) 
											If the trip falls on an off week, Trellis Bay still offers the Last Resort. (Nightlife).  
											The crew will then prepare drinks and appetizers, followed by a delicious dinner.

										</p>
									</section>
									<section>
										<header>
											<h3>Day 5</h3>
										</header>
										<p>
											After breakfast, we depart Trellis Bay to the Baths. The Baths are incredible, with huge, 
											house-sized boulders literally piled on top of each other. 
											There are several paths through the boulders that lead to Devil's Bay, 
											one of the most beautiful bays in the British Virgin Islands. 
											There is a restaurant bar at the top of The Baths, 
											where you can have an enjoyable lunch with an excellent view and a pool. 
											The adventure offers rock climbing/exploring (there are ladders, platforms, and ropes to assist).  
											After a few hours, lunch is served before heading to the North Sound of Virgin Gorda.  
											<br />
											North Sound, at the north end of Virgin Gorda (also known as the “Fat Virgin”), 
											has several places to go ashore and explore. Saba Rock, 
											where you can walk around the back side of the island in the Saba Rock Gardens. 
											The landscaping is beautiful and surrounded entirely by conch shells. There are hammocks to relax in, 
											a gift shop, a game room and you’re sure to see massive tarpon at the dock after sunset. 
											The Bitter End is also great for night-time fun. 
											Some of the best snorkeling is on the reef just north of the Bitter End. 
											The crew is standing by to prepare your cocktails, hors d'oeuvres and dinner.

										</p>
									</section>
									<section>
										<header>
											<h3>Day 6</h3>
										</header>
										<p>
											After a delicious breakfast, it's a downwind sail to The Dogs. The Dogs are primarily a snorkel and 
											dive stop as the life on the reef is surreal. Lunch is served on the deck, and as always, 
											open ship's bar is available. After wrapping up lunch, we depart to Great Harbor (home to places such as Foxy’s, 
											where the party never stops.) Next door to Great Harbor is White Bay, with The Soggy Dollar Bar. 
											This is also an excellent choice for the night. Families with children will love the white sand beach. 
											The crew is standing by to prepare cocktails, hors d’oeuvres, and dinner.
 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 7</h3>
										</header>
										<p>
											Depart Great Harbor for Sandy Cay or Green Turtle Cay – less than 1 nautical mile. After a delicious breakfast, 
											we head to Sandy Cay or Green Turtle Cay. Both offer white, sandy, deserted islands with snorkeling, swimming and exploring. 
											A short hike past hermit crabs and various lizards to the top of Sandy Cay should not be missed!  
											Lunch is served on the deck, and the crew prepares to depart for Cane Garden Bay (CGB).   
											CGB welcomes you to restaurants, bars, and water sports.  You can also often find a band playing at Myett's Garden Inn and Grille. 
											Callwood's Rum Distillery is also located at Cane Garden Bay; if you would like to do some exploring in the oldest Rum Distillery on the islands. 
											After a long day, your crew is standing by to prepare cocktails, hors d’oeuvres, and dinner.
										</p>
									</section>
									<section>
										<header>
											<h3>Day 8</h3>
										</header>
										<p>
											After the last breakfast, you depart for St. Thomas, B.V.I. (Home Port).   The trip may have come to an end, but there’s always next year.  
											The crew will assist in disembarking Island Hoppin’. (Side Note: A tip of +20% is recommended for the crew as they work all day and night through your vacation to please) 
										</p>
									</section>
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section id="explore">
									<header>
										<h3>Points of Interest</h3>
									</header>
									<p>
										The Caribbean has so much to offer that we can't show you everything here... BUT no one said we 
										wouldn't show you some of our favorite places.
									</p>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/The_Baths" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/The-Baths.png" alt="The Baths" /></a>
										</div>
										<div class="8u">
											<h4>The Baths</h4>
											<p>
												Located on Virgin Gorda, B.V.I.; The Baths satistfy the inner explorer in all of us. 
												The Baths was formed by granite that eroded into piles of boulders on the beach.
												The boulders form natural tidal pools, tunnels, arches, and scenic grottoes that are open to the sea.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Tortola" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/cane-garden-bay.jpg" alt="Cane Garden Bay" /></a>
										</div>
										<div class="8u">
											<h4>Cane Garden Bay</h4>
											<p>
												Located on the main island of Tortola, B.V.I.; this beach is known for the views, food, and night life.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Anegada" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/anegada-flamingo.jpg" alt="Anegada Island" /></a>
										</div>
										<div class="8u">
											<h4>Anegada Island</h4>
											<p>
												Located <del>15 miles</del> 24 KM from Virgin Gorda, B.V.I.; the island is home to 285 villagers and is known for miles of white sand beaches 
												and the largest barrier coral reef in the Caribbean, and the fourth largest on earth. 
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="http://www.soggydollar.com/" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Soggy-Dollar-Bar.jpg" alt="Soggy Dollar Bar" /></a>
										</div>
										<div class="8u">
											<h4>The Soggy Dollar Bar</h4>
											<p>
												Located on Jost Van Dyke, B.V.I (White Bay); The Soggy Dollar Bars offers a unique beach bar experience.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://travel.usnews.com/British_Virgin_Islands/Things_To_Do/Smugglers_Cove_Tortola_61148/" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Smugglers-cove.jpg" alt="Smuggler's Cove" /></a>
										</div>
										<div class="8u">
											<h4>Smuggler's Cove</h4>
											<p>
												Enjoyed the shady palm trees and calm blue water located on Tortola, B.V.I..
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/RMS_Rhone" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/RMS-Rhone.jpg" alt="Wreck of the RMS Rhone" /></a>
										</div>
										<div class="8u">
											<h4>The Wreck of the RMS Rhone</h4>
											<p>
												She was wrecked off the coast of Salt Island in the British Virgin Islands on 29 October 1867 in a hurricane. 
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Cooper_Island_(British_Virgin_Islands)" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/cooper-island.jpg" alt="Cooper Island" /></a>
										</div>
										<div class="8u">
											<h4>Cooper Island</h4>
											<p>
												A small island of the British Virgin Islands, offers amenities such a restaurant, rum bar, coffee shop, solar powered brewery, and gift shop.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Norman_Island" target="_blank"class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Norman-Island.jpg" alt="Normal Island" /></a>
										</div>
										<div class="8u">
											<h4>Norman Island</h4>
											<p>
												Norman Island is an island located at the southern tip of the British Virgin Islands archipelago. It is said that the island was named after a pirate who bought it or leased it at some point during the early 18th century,
												although supporting evidence for this contention is difficult to find.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Peter_Island" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Peter-Island.jpeg" alt="Peter Island" /></a>
										</div>
										<div class="8u">
											<h4>Peter Island</h4>
											<p>
												Peter Island is the largest private island in the BVI and the fifth largest of the 60 islands, quays, and exposed reefs that comprise the BVI.
												The island is predominately undeveloped but contains hiking and biking trails on which to discover the tropical flora and fauna indigenous to Peter Island. 
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Sandy_Cay" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/sandy-cay.jpg" alt="Sandy Cay" /></a>
										</div>
										<div class="8u">
											<h4>Sandy Cay</h4>
											<p>
												Sandy Cay is an uninhabited island of the British Virgin Islands in the Caribbean. It is located between Tortola and Jost Van Dyke. 
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Cruz_Bay,_U.S._Virgin_Islands" target="_blank" class="image fit"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Cruz-Bay.jpg" alt="Cruz Bay" /></a>
										</div>
										<div class="8u">
											<h4>Cruz Bay</h4>
											<p>
												Cruz Bay, located on the west coast of Saint John, U.S.V.I., is the island's largest commercial center and the location of the main port on Saint John. 
												Cruz Bay is home to numerous shops and restaurants which are frequented by tourists and locals alike.
											</p>
										</div>
									</div>
									
									
								</section>
							</div>
						</div>
						<hr id="menu"/>
						<header style="text-align:center;">
							<h2  style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif; margin-bottom: 30px;">Sample Menu</h2>
							<subscript style="text-align: center;"> <b>Note:</b> Hover to See details  /  <b>Legend:</b> *Chef’s Favorite | **Captain’s Favorite </subscript>
						</header>
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/TMBreakfast.jpg" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Breakfast</h3>
								</header>
								<ul>
									<li><div class="tooltip">&mdash; Eggs-in-a-Bread* <span class="tooltiptext">A pair of french baguette rounds filled with eggs over easy, served with rosemary sweet potatoes + fresh fruit</span> </div></li>
									<li><div class="tooltip">&mdash; Coconut Waffles with Strawberry Rhubarb Compote <span class="tooltiptext">Traditional or gluten free waffle mix brought to life with coconut milk + coconut flakes</span> </div></li>
									<li><div class="tooltip">&mdash; Lemon Blueberry Granola and Yogurt <span class="tooltiptext">Tangy, sweet, and slightly spiced, enjoy this homemade granola packed with nutrients over greek yogurt with local honey and fresh fruits</span> </div></li>
									<li><div class="tooltip">&mdash; Baked Greens Frittata <span class="tooltiptext">Inspired by the signature Provençal chard omelet called trucha, this beautiful baked frittata incorporates thick Greek yogurt, lots of greens + garlic</span> </div></li>
									<li><div class="tooltip">&mdash; Southern Style Sausage and Gravy Biscuits** <span class="tooltiptext">Our weeks wouldn’t be complete without a traditional, belly pleasing plate consisting of mouth watering butter biscuits + hearty sausage-studded white gravy</span> </div></li>
									<li><div class="tooltip">&mdash; Roasted Rosemary Sweet Potatoes, Poached Eggs + Avocado <span class="tooltiptext">Poached eggs served on a bed of rosemary sweet potato fries, crispy baked bacon + avocado, served with a juicy, local fruit salad (dragon fruit, papaya, pineapple)</span> </div></li>
									<li><div class="tooltip">&mdash; Asparagus Shaksuka <span class="tooltiptext">A delicious combination of poached eggs in a morning stew of tomatoes, asparagus, scallions and thyme. Served with rosemary sourdough and fresh fruit.</span> </div></li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/TMLunch.jpg" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Lunch</h3>
								</header>
								<ul>
									<li><div class="tooltip">&mdash; Baltimore-Style Crab Cakes <span class="tooltiptext">Kept simple and focused on the jumbo lump crab meat, experience unadulterated crab cake heaven paired with a tri-color slaw + zesty lime dressing</span> </div></li>
									<li><div class="tooltip">&mdash; Local Mahi Tacos*  <span class="tooltiptext">Grilled Mahi Mahi seasoned with a signature blend of spices on roasted corn tortillas topped with cabbage, avocado, mango salsa + a lime cilantro aioli drizzle</span> </div></li>
									<li><div class="tooltip">&mdash; Grilled Chicken Caesar Salad <span class="tooltiptext">Crunch romaine tossed with homemade garlicky caesar dressing, shaved Parmesan, homemade crispy croutons.</span> </div></li>
									<li><div class="tooltip">&mdash; Grilled Portobello Sandwich*  <span class="tooltiptext">Juicy portobello steaks marinated in olive oil + balsamic vinegar, grilled until lightly crispy, topped with caramelized onion, melted feta, roasted red peppers, drizzled with basil aioli on a ciabatta bun</span> </div></li>
									<li><div class="tooltip">&mdash; Shrimp on Cauliflower Fried Rice Bowl <span class="tooltiptext">This paleo-friendly, 5-ingredient meal is loaded with fresh vegetables, tender shrimp, and signature Asian flavors</span> </div></li>
									<li><div class="tooltip">&mdash; Salmon Arugula Salad <span class="tooltiptext">Zesty, grilled salmon atop a bed of spicy arugula, local heirloom cherry tomatoes, shaved asiago, pine nuts, dressed with a tangy lemon pepper vinaigrette</span> </div></li>
								</ul>
							</article>
							</div>
							<hr />
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/TMDinner.jpg" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Dinner</h3>
								</header>
								<ul>
									<li><div class="tooltip">&mdash; Ahi Tuna Tower with Sesame Wonton Crisps <span class="tooltiptext">A tower of sushi grade ahi tuna, sushi rice, mango-cucumber salad + microgreens with a Wasabi + Sriracha Aioli drizzle</span> </div></li>
									<li><div class="tooltip">&mdash; Filet Mignon <span class="tooltiptext">Select tender, juicy filets grilled to order, paired with baked brussel sprouts + sautéed minced cauliflower, with an herbed mushroom cream sauce </span> </div></li>
									<li><div class="tooltip">&mdash; Seafood Paella <span class="tooltiptext">A summer favorite and perfect base for the freshest seafood available, with notes of tangy lemon, fresh herbs, and mediterranean spices</span> </div></li>
									<li><div class="tooltip">&mdash; Blackened Sesame Chicken Stir Fry <span class="tooltiptext">Wild rice sauteed in sesame oil with snap peas, broccoli, water chestnuts, celery, and carrots topped with sesame seeds + coconut aminos or soy sauce</span> </div></li>
									<li><div class="tooltip">&mdash; Grilled Flank Steak  <span class="tooltiptext">Marinated overnight and flash grilled, this flank steak pairs perfectly with a corn + black bean salsa, grape tomatoes, microgreens, and homemade chimichurri</span> </div></li>
									<li><div class="tooltip">&mdash; Simply Elegant Pasta* <span class="tooltiptext">Quinoa angel hair pasta mixed with sauteed onions, crispy bacon bites, sun dried tomatoes and zangy capers</span> </div></li>
									<li><div class="tooltip">&mdash; Fresh Caught Grilled Lobster Tail** <span class="tooltiptext">Split tails grilled with garlic herbed butter, grilled red potatoes and baked avocado with red rice salsa</span> </div></li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/TMAppetizer.jpg" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Appetizers</h3>
								</header>
								<ul>
									<li><div class="tooltip">&mdash; Caribbean Conch Salad*  <span class="tooltiptext">Freshly cracked, local caught conch marinated in lime juice with bell peppers, onions, jalapeño + cilantro served with crunchy plantain chips</span> </div></li>
									<li><div class="tooltip">&mdash; Tomato and Basil Bruschetta <span class="tooltiptext">A dreamy combination of tomatoes, boat grown basil, and italian herbs with a drizzle of balsamic reduction on crostinis </span> </div></li>
									<li><div class="tooltip">&mdash; Bountiful Charcuterie Board <span class="tooltiptext">A board full of variety: Bold meats (prosciutto, salami, sopressata...) + a range of cheeses (truffle goat cheese, aged asiago, crumbled blue, merlot or espresso bellavitano, dill havarti...) + delectable spreads (fig jam, stone ground mustard, olive tapenade...) + pickled vegetables (beets, jalapenos, pepperoncinis…) + seasonal fruits</span> </div></li>
									<li><div class="tooltip">&mdash; Homemade Hummus  <span class="tooltiptext">Ground chickpeas, nutty tahini, fresh squeezed lemon juice, smashed garlic, EVOO + served with warm pita bread and sliced vegetables</span> </div></li>
									<li><div class="tooltip">&mdash; Watermelon Goat Cheese Salad*  <span class="tooltiptext">Watermelon spheres tossed with creamy crumbled goat cheese topped with fresh mint</span> </div></li>
									<li><div class="tooltip">&mdash; Prosciutto Wrapped Melon** <span class="tooltiptext">Skewers of melon strips and prosciutto + drizzles of honey + rock salt</span> </div></li>
									<li><div class="tooltip">&mdash; Baked Arancini and Bruschetta <span class="tooltiptext">Breaded risotto balls with mozzarella and select meats, grilled bread rubbed with garlic + topped with a fresh herbed tomato salad</span> </div></li>
									<li><div class="tooltip">&mdash; Sizzling Shrimp Roll <span class="tooltiptext">Chili-garlic seared shrimp, cabbage, shredded carrots, bibb lettuce, cilantro, thai basil, mint + homemade chili hoisin peanut dipping sauce</span> </div></li>
								</ul>
							</article>
							</div>
							<hr />
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/TMDessert.jpg" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Desserts</h3>
								</header>
								<ul>
									<li><div class="tooltip">&mdash; Homemade Chia Pudding*  <span class="tooltiptext">Chia seeds, almond milk, 100% cocoa, cinnamon + tropical fruit</span> </div></li>
									<li><div class="tooltip">&mdash; Key Lime Pie  <span class="tooltiptext">Key lime juice, egg yolks, and sweetened condensed milk in a graham cracker pie crust</span> </div></li>
									<li><div class="tooltip">&mdash; Crème Brûlée <span class="tooltiptext">In honor of her mother, Margaret prepares this traditional french dessert with love - a rich custard base + a contrasting layer of hard caramel</span> </div></li>
									<li><div class="tooltip">&mdash; Cocoa Avocado Mouse <span class="tooltiptext">A creamy combination of local avocados, 100% cocoa, maple syrup + almond milk, topped with kiwi or caramelized pears</span> </div></li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/Drinks.png" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Drinks</h3>
								</header>
								<ul>
									<li>&mdash; Passengers Recieve an Island Hoppin' Water Bottle for Filter Water</li>
									<li>&mdash; Painkillers (An Island Specialty)</li>
									<li>&mdash; An assortment of Beer</li>
									<li>&mdash; Select Wine</li>
									<li>&mdash; An assortment of Liquor (Rum is Popular)</li>
									<li>&mdash; Soda</li>
									<li>&mdash; Juice available on request</li>
									<li>&mdash; Requested Beverages (based on island availabity)</li>
								</ul>
							</article>
							
							</div>

							<section  class="carousel">
									<div class="reel">
									<?php foreach($foodImages['data']['foodImagesCollection']['items'] as $value) : ?>
										<article>
											<a href="<?php echo $value['photo']['url']; ?>" class="swipebox1" title="<?php echo $value['title']; ?>">
												<img class="image featured" style="width:290px; height:auto; margin-top:30px" src="<?php echo $value['photo']['url']; ?>" alt="<?php echo $value['title']; ?>">
											</a>
										</article>
									<?php endforeach ?>
							</section>
							<hr />
							
							<div id="swag">
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Island Swag</h2>
								</header>
								<div id="swag">
									<article id="main" class="special">
										<div class="row">
											<article class="6u 12u(mobile) special">
												<h2 style="padding-top:10px; text-align: center; font-size:2.2em;">The iHop Yeti</h3>
												<hr style="margin-top:-50px;" />
												<p> Introducing our new Island Hoppin' Yeti 20 oz. Rambler® Tumbler with MagSlider™ LidTumbler. </p>
												<p> These cups were made for the islands, keeping your beverages cold throughout the day while ensuring you get to enjoy every sip with a spill-proof lid.
												When you get home, these Tumblers are also perfect for keeping your hot beverages warm for hours.</p>
												<p> While aboard, don't forget to purchase your perfect souvenir, available in White and Seafoam Blue.</p>
											</article>
											<article class="6u 12u(mobile) special">
												<a href="#meet" class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Yeti-swag.jpeg" alt="Island hoppin Swag - Assorted Yeti Cups" /></a>
											</article>
										</div>
									</article>
								</div>
							</div>
							
							<hr />
							<div id="testimonials">
								<!-- Motion Photos -->
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sailor Testimonials</h2>
								</header>
								<section  class="carousel">
									<div class="reel">
									<?php foreach($testimonials['data']['customerTestimonialsCollection']['items'] as $value) : ?>
										<article>
											<div>
												<h3 style="vertical-align: center;"><?php echo $value['title']; ?></h4>
												<h4 style="padding-top:10px;">Overall Experience: </h4>
												<?php 
													for ($x = 0; $x <= ($value['starCount']-1); $x++) {
														echo '<i class="fa fa-star" aria-hidden="true"></i>';
													}
												?>
												<!-- <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> -->
												<br> <subscript style="text-align: center; margin-top:-50px;"><?php $newsDate=date_create($value['date']); echo date_format($newsDate,"F - Y"); ?></subscript> <br>
												<?php
													$count = $value['trips'];
													
													switch ($count) {
													  case "1":
													    echo '<i class="fa fa-anchor" aria-hidden="true"></i><subscript style="padding-top:10px;"> - First Time Sailer</subscript>';
													    break;
													  case "2":
													    echo '<i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" aria-hidden="true"></i><subscript style="padding-top:10px;"> - Returning Sailer</subscript>';
													    break;
													  case "3":
													    echo '<i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" aria-hidden="true"></i><subscript style="padding-top:10px;"> - Experienced Sailer</subscript>';
													    break;
													  case "4":
													    echo '<i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" aria-hidden="true"></i><subscript style="padding-top:10px;">+ - Seasoned Salty</subscript>';
													    break;
													  default:
													    echo '<i class="fa fa-anchor" aria-hidden="true"></i><subscript style="padding-top:10px;"> - First Time Sailer</subscript>';
													}
												?>
												<hr style="margin-top:-50px;" />
												<div class="hideoffscreen">
													<h4 style="margin-top:-60px;"> <?php echo $value['headline']; ?></h3>
													<p style="text-align: center; line-height: 1.25em"> 
														<?php
															$starting = $value['headline'];
															$text = $value['testimonial'];
															if ($value['spaceFlag'] == '1'){
																$remaining = 260 - strlen($starting);
															}
															else{
																$remaining = 250 - strlen($starting);
																
															}
															echo ellipsis($text,$remaining);
														?> 
													</p>
												</div>
												<a href="#ex<?php echo $value['orderId'];?>" rel="modal:open" class="btn btn-lg btn-success"><subscript>Click to read the full review</subscript></a>
											</div>
											<div id="ex<?php echo $value['orderId'];?>" class="modal modal-size" style="background-color:#CCDBEE;">
												<h3 style="text-align: center;">Trip Date: <?php $newsDate=date_create($value['date']); echo date_format($newsDate,"F - Y"); ?></h3>
												<h3 style="text-align: center;">Guest Name: <?php echo $value['title']; ?></h3>
												<br />
												<?php
													$count = $value['starCount'];
													
													switch ($count) {
													  case "1":
													    echo '<p style="text-align: center; margin-top:-30px;"><i class="fa fa-anchor" aria-hidden="true"></i><subscript> - First Time Sailer</subscript></p>';
													    break;
													  case "2":
													    echo '<p style="text-align: center; margin-top:-30px;"><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" aria-hidden="true"></i><subscript> - Returning Sailer</subscript></p>';
													    break;
													  case "3":
													    echo '<p style="text-align: center; margin-top:-30px;"><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" aria-hidden="true"></i><subscript> - Experienced Sailer</subscript></p>';
													    break;
													  case "4":
													    echo '<p style="text-align: center; margin-top:-30px;"><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" style="padding-right:5px;" aria-hidden="true"></i><i class="fa fa-anchor" aria-hidden="true"></i><subscript>+ - Seasoned Salty</subscript></p>';
													    break;
													  default:
													    echo '<p style="text-align: center; margin-top:-30px;"><i class="fa fa-anchor" aria-hidden="true"></i><subscript> - First Time Sailer</subscript></p>';
													}
												?>
												<p style="text-align: center; margin-top:-20px;"><b>Crew: </b><?php echo $value['crew']; ?></p>
												<hr style="margin-top:-70px;"/>
												<p style="margin-top:-50px; text-align:left"><?php echo nl2br($value['testimonial']); ?></p>
												<hr style="margin-top:-50px;" />
												<p style="text-align: center; margin-top:-50px;" > &copy; Island Hoppin' <script>document.write(new Date().getFullYear())</script>. All rights reserved.</p>
											</div>
										</article>
									<?php endforeach ?>
										
								</section>

							</div>
							<hr />
							
							<div>
								<div id="customerVideos">
								<!-- Motion Photos -->
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sailor Posted Photos</h2>
								</header>
								<section  class="carousel">
									<div class="reel">
									<?php foreach($customerPhotos['data']['customerPhotosCollection']['items'] as $value) : ?>
										<article>
											<a href="<?php echo $value['photo']['url']; ?>" class="swipebox2" title="<?php $newsDate=date_create($value['date']); echo date_format($newsDate,"F j, Y"); ?>:  <?php echo $value['title']; ?>">
												<img class="image featured" style="width:290px; height:auto; margin-top:30px" src="<?php echo $value['photo']['url']; ?>" alt="<?php echo $value['title']; ?>">
											</a>
										</article>
									<?php endforeach ?>
								</section>
								<h3 style="text-align:center;">Click to enlarge photos.</h3>
								<hr />
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sailor Posted Videos</h2>
								</header>
								<section  class="carousel">
									<div class="reel">
									<?php foreach($customerVideos['data']['customerVideosCollection']['items'] as $value) : ?>
										<article>
											<a href="<?php echo $value['url']; ?>" target="_blank" class="image featured"><img src="<?php echo $value['photo']['url']; ?>" alt="<?php echo $value['title']; ?>" /></a>
											<header>
												<h3><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['title']; ?> </br> <i>Date: <?php $newsDate=date_create($value['date']); echo date_format($newsDate,"F j, Y"); ?></i></a></h3>
											</header>
											</a>
										</article>
									<?php endforeach ?>
								</section>
								</div>
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

	</body>
</html>