<?php     
	require 'New/connection.inc.php'; 
      // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
	$sqltut = $dbconn->prepare("Select news_id, header, update, image, blank_1 From customertut ORDER BY news_id DESC") ; 
	$sqlfood = $dbconn->prepare("Select food_id, food_title, show, image, blank_1 From food WHERE show = 'Yes' ORDER BY food_id DESC") ; 
	$sqlcustpics = $dbconn->prepare("Select pic_id, pic_title, show, image, blank_1 From customerpic WHERE show = 'Yes' ORDER BY pic_id DESC") ; 
	$sqlcustvids = $dbconn->prepare("Select vid_id, vid_title, show, video_link, image, blank_1 From customervid WHERE show = 'Yes' ORDER BY vid_id DESC") ; 
      // Execute the query, if there were variables, they could be bound within the brackets
    $sqltut->execute() ;
    $sqlfood->execute() ;
    $sqlcustpics->execute() ;
    $sqlcustvids->execute() ;
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
		<script src="assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="src/js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="src/css/swipebox.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			;( function( $ ) {
			
				$( '.swipebox' ).swipebox();
			
			} )( jQuery );
		</script>
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
									</ul>
								</li>
								<li>
									<a href="Experience.php" style="font-weight:bold;">The Experience</a>
									<ul>
										<li><a href="#itinerary">Sample Itinerary</a></li>
										<li><a href="#explore">Points of Interest</a></li>
										<li><a href="#menu">Sample Menu</a></li>
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
						</header>
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/Breakfast.png" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Breakfast</h3>
								</header>
								<ul>
									<li>&mdash; Homemade buttermilk pancake stack served with bacon, dusted with icing sugar and a fresh berry sauce </li>
									<li>&mdash; Traditional Italian sausage frittata</li>
									<li>&mdash; Classic eggs benedict with black forest ham, homemade hollandaise sauce and wilted spinach</li>
									<li>&mdash; Full Irish: Authentic potato bread served with bacon, sausages, fried eggs and oven roasted vine tomatoes</li>
									<li>&mdash; Caribbean French toast served with fried bananas, toasted coconut and drizzled with local Virgin Islands honey</li>
									<li>&mdash; Smoked salmon, cream cheese and dill bagels</li>
									<li>&mdash; Individual egg soufflés with feta cheese, spinach, tomatoes and oregano</li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/Lunch.png" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Lunch</h3>
								</header>
								<ul>
									<li>&mdash; Moules marinere with freshly baked granary bread</li>
									<li>&mdash; Citrus glazed salmon on a bed of seasonal greens</li>
									<li>&mdash; Chicken pad thai tossed with beansprouts, fresh cilantro and roasted peanuts </li>
									<li>&mdash; Seared scallops and crispy prosciutto with roasted tomatoes and smashed white beans </li>
									<li>&mdash; Grilled swordfish, green beans and spicy tomato salsa</li>
									<li>&mdash; Sweet okra shrimp curry with plantain puree</li>
									<li>&mdash; Caribbean jerk burgers with pineapple relish and spicy coleslaw</li>
								</ul>
							</article>
							</div>
							<hr />
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/Dinner.png" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Dinner</h3>
								</header>
								<ul>
									<li>&mdash; Pork escalope Holstein with fried duck egg, buckwheat tomato salad, anchovies topped with parsley and capper beurre noisette</li>
									<li>&mdash; Braised lamb breast, boulangere potatoes, green beans and griddled courgettes</li>
									<li>&mdash; Honey glazed ham knuckle with buttered new potatoes, parsley sauce, sautéed cabbage and sweet piccalli</li>
									<li>&mdash; Confit duck ravioli with sage and hazelnut butter</li>
									<li>&mdash; Marsala pork tenderloin with roasted asparagus and sweet potato puree</li>
									<li>&mdash; Beef tenderloin with café paris butter, homemade fries, roasted tomatoes and portobella mushroom </li>
									<li>&mdash; Mahi mahi fillet with saffron risotto and a mango cilantro sauce</li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/Appetizer.png" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Appetizers</h3>
								</header>
								<ul>
									<li>&mdash; Tomato and burrata bruschetta</li>
									<li>&mdash; Oven baked brie with sautéed cinnamon walnuts</li>
									<li>&mdash; Asian infused tuna on toasted bread</li>
									<li>&mdash; Charcuterie platter with an assortment of international cheeses, crackers and olives </li>
									<li>&mdash; Conch fritters with a chilli lime dipping sauce</li>
									<li>&mdash; Tuna salad puff pastry bites</li>
									<li>&mdash; Homemade falafel with cucumber yoghurt sauce</li>
								</ul>
							</article>
							</div>
							<hr />
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="https://dzx3g8o0zzxkn.cloudfront.net/Experience/Food/Dessert.png" style="max-height:420px; text-align:center; overflow: hidden;" alt="" /></a>
								<header>
									<h3>Desserts</h3>
								</header>
								<ul>
									<li>&mdash; Ginger crème brulee</li>
									<li>&mdash; Panna cotta with orange baked and glazed figs served along side tuille biscuits </li>
									<li>&mdash; Chocolate fondant pudding with raspberry and champagne sorbet</li>
									<li>&mdash; Irish cream Tiramisu</li>
									<li>&mdash; Homemade profiteroles filled with crème diplomat and coated in dark chocolate sauce </li>
									<li>&mdash; Fluffy lemon pudding with limoncello cream</li>
									<li>&mdash; Bananas foster beignets with café brulot crème anglaise</li>
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
									<?php while( $row2 = $sqlfood->fetch()) : ?>
										<article>
											<a href="<?php echo $row2['image']; ?>" class="swipebox1" title="<?php echo $row2['food_title']; ?> - Date: <?php echo $row2['blank_1']; ?>">
												<img class="image featured" style="width:290px; height:auto; margin-top:30px" src="<?php echo $row2['image']; ?>" alt="<?php echo $row2['food_title']; ?>">
											</a>
										</article>
									<?php endwhile ?>
							</section>
							<hr />
							<div id="testimonials">
								<!-- Motion Photos -->
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sailor Testimonials</h2>
								</header>
								<section  class="carousel">
									<div class="reel">
									<?php while( $row1 = $sqltut->fetch()) : ?>
										<article>
											<a href="<?php echo $row1['image']; ?>" class="swipebox" title="<?php echo $row1['header']; ?> - Date: <?php echo $row1['blank_1']; ?>">
												<img class="image featured" style="width:290px; height:auto; margin-top:30px" src="<?php echo $row1['image']; ?>" alt="<?php echo $row1['update']; ?>">
											</a>
										</article>
									<?php endwhile ?>
								</section>
								<h3 style="text-align:center;">Click to enlarge photos.</h3>
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
									<?php while( $row3 = $sqlcustpics->fetch()) : ?>
										<article>
											<a href="<?php echo $row3['image']; ?>" class="swipebox2" title="<?php echo $row3['pic_title']; ?> - Date: <?php echo $row3['blank_1']; ?>">
												<img class="image featured" style="width:290px; height:auto; margin-top:30px" src="<?php echo $row3['image']; ?>" alt="<?php echo $row3['pic_title']; ?>">
											</a>
										</article>
									<?php endwhile ?>
								</section>
								<h3 style="text-align:center;">Click to enlarge photos.</h3>
								<hr />
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sailor Posted Videos</h2>
								</header>
								<section  class="carousel">
									<div class="reel">
									<?php while( $row4 = $sqlcustvids->fetch()) : ?>
										<article>
											<a href="<?php echo $row4['video_link']; ?>" target="_blank" class="image featured"><img src="<?php echo $row4['image']; ?>" alt="<?php echo $row4['vid_title']; ?>" /></a>
											<header>
												<h3><a href="<?php echo $row4['video_link']; ?>" target="_blank"><?php echo $row4['vid_title']; ?> - Date: <?php echo $row4['blank_1']; ?></a></h3>
											</header>
											</a>
										</article>
									<?php endwhile ?>
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
											<li>&copy; Island Hoppin' 2018. All rights reserved.</li>
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