<?php
    $verifyCode = getenv('SET_VERIFY');
    $onPage = $_POST["INTERNAL"];
    if ($onPage == ""){
        header( 'Location: /Admin.html') ;
    }
    if ($onPage != $verifyCode){
        echo "Incorrect Passphrase";
        header( 'Location: /Admin.html') ;
    }
    if ($onPage == $verifyCode){
	    $season = $_POST["season"];
	    $twopax = $_POST["twopax"];
	    $threepax = $_POST["threepax"];
	    $fourpax = $_POST["fourpax"];
	    $fivepax = $_POST["fivepax"];
	    $sixpax = $_POST["sixpax"];
	    $sevenpax = $_POST["sevenpax"];
	    $eightpax = $_POST["eightpax"];
	    $price_id = $_POST["price_id"];
        
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
						<div class="row 200%">
						    <header style="text-align:center;">
								<h2>Admin Content Manager - Island Hoppin'</h2>
								<p>
									<a href="http://islandhoppincharters.com/New/Content.php?INTERNAL=<?php echo $onPage?>">Go to the Admin Screen</a>
								</p>
							</header>
							<div class="8u 12u(mobile)" id="content" style="margin-top:-50px;">
								<article id="main">
									<section>
									<header><h2>Edit Data Fields</h2></header>
									<form action = "../Alter/update.php" method = "post">
        		                        <header><h3>Season</h3></header>
                                        <input type="text" name="season"  value = "<?php echo $season;?>">
                                        <header style="margin-top:25px;"><h3>2 Passengers</h3></header>
                                        <input type="text" name="twopax" value = "<?php echo $twopax;?>">
                                        <header style="margin-top:25px;"><h3>3 Passengers</h3></header>
                                        <input type="text" name="threepax" value = "<?php echo $threepax;?>">
                                        <header style="margin-top:25px;"><h3>4 Passengers</h3></header>
                                        <input type="text" name="fourpax" value = "<?php echo $fourpax;?>">
                                        <header style="margin-top:25px;"><h3>5 Passengers</h3></header>
                                        <input type="text" name="fivepax" value = "<?php echo $fivepax;?>">
                                        <header style="margin-top:25px;"><h3>6 Passengers</h3></header>
                                        <input type="text" name="sixpax" value = "<?php echo $sixpax;?>">
                                        <header style="margin-top:25px;"><h3>7 Passengers</h3></header>
                                        <input type="text" name="sevenpax" value = "<?php echo $sevenpax;?>">
                                        <header style="margin-top:25px;"><h3>8 Passengers</h3></header>
                                        <input type="text" name="eightpax" value = "<?php echo $eightpax;?>">
                                        <header style="margin-top:25px;"><h3>Show</h3></header>
                                        <select name="show">
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select>
                                        <br />
                                        <input type="hidden" name="price_id" value = "<?php echo $price_id;?>">
                                        <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                        <input type="hidden" name="table" value = "priceSchedule">
                                        <input type="submit" value="Submit">
                                    </form>
									</section>
									
								</article>
							</div>
						</div>				
						<hr />
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
											<li>&copy; Island Hoppin' 2017. All rights reserved.</li>
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