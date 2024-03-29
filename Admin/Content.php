<?php
    $passphrase = getenv('SET_PASSPHRASE');
    $compare = $_POST["passphrase"];
    $onPage = $_GET["INTERNAL"];
    $verifyCode = getenv('SET_VERIFY');
    if ($compare == $passphrase || $onPage == $verifyCode){
	        echo "Correct Passphrase";
	    } else {
	    	echo "Incorrect Passphrase";
        	header( 'Location: /Admin.html') ;
	    }
    
    
?>
<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
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
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="apple-touch-icon" href="/images/favicon.png" />
		<link rel="shortcut icon" href="/images/favicon.png" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Main -->
			
				<div class="wrapper style1">
					<div class="container">
						
						    <header style="text-align:center;">
								<h2>Admin Content Manager - Island Hoppin'</h2>
								<p>
									<a href="../Home.php">Go to the Home Screen</a>
								</p>
							</header>
							
							<div>
								
								<section>
									
									<header>
										<h3 style="text-align:center;"><a href="https://app.contentful.com/spaces/feujzg2f0w3f/home" target="_blank">Manage Content in <i>Contentful</i></a></h3>
										<hr />
										<form action="/Admin/Show/CustomerTestimonials.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show Customer Testimonials</button>
                                        </form>
                                        <form action="/Admin/Show/News.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show iHop News</button>
                                        </form>
                                        <form action="/Admin/Show/PriceSchedule.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show Price Schedule</button>
                                        </form>
                                        <form action="/Admin/Show/PriceSpecials.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show Price Specials</button>
                                        </form>
                                        <form action="/Admin/Show/FAQ.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show FAQs</button>
                                        </form>
                                        <form action="/Admin/Show/FoodPhotos.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show Food Photos</button>
                                        </form>
                                        <form action="/Admin/Show/CustomerPhotos.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show Customer Photos</button>
                                        </form>
                                        <form action="/Admin/Show/CustomerVideos.php" method="post" style="text-align: center;">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" class="button" Style="margin-top:5px; margin-bottom:5px;">Show Customer Videos</button>
                                        </form>
                                        <br />
									</header>	
								</section>
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
												<a href="#" class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="/images/logo.png" alt="" /></a>
											</article>
											<article class="6u 12u(mobile) special">
											<header>
												<h3>Like what you see?</h3>
											</header>
											<p>Check out some of our social media pages.</p>
											<ul class="icons">
												<li><a href="https://www.facebook.com/IslandHoppinCharters/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://www.instagram.com/islandhoppincharters/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="mailto:IslandHoppinCharters@gmail.com" class="icon fa-envelope-o"><span class="label">Email Us</span></a></li>
											</ul>
											</article>
											<article class="3u 12u(mobile) special fadeshow1">
												<a href="#" class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="/images/logo.png" alt="" /></a>
											</article>
										</div>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Island Hoppin' 2019. All rights reserved.</li>
										</ul>
									</div>
							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.dropotron.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.onvisible.min.js"></script>
			<script src="/assets/js/skel.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/assets/js/main.js"></script>

	</body>
</html>