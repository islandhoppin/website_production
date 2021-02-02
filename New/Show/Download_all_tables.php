<?php
    $verifyCode = getenv('SET_VERIFY');
    $onPage = $_POST["INTERNAL"];

    if ($onPage == $verifyCode){
        require '../connection.inc.php'; 
        // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
    	$sqlcustpics = $dbconn->prepare("Select pic_id, pic_title, show, image, blank_1 From customerpic ORDER BY pic_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$sqlcustpics->execute() ;
    	
    	$sqlcustvids = $dbconn->prepare("Select vid_id, vid_title, show, video_link, image, blank_1 From customervid ORDER BY vid_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$sqlcustvids->execute() ;
    	
    	$faqList = $dbconn->prepare("Select faq_id, question, answer, faqorder, show, blank_1 From faqList ORDER BY faqorder ASC") ; 
        // Execute the query, if there were variables, they could be bound within the brackets
        $faqList->execute() ;
        
        $sqlfood = $dbconn->prepare("Select food_id, food_title, show, image, blank_1 From food ORDER BY food_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$sqlfood->execute() ;
    	
    	$sqlnew = $dbconn->prepare("Select news_id, header, update, image, blank_1 From newsupdates ORDER BY news_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$sqlnew->execute() ;
    	
    	$sqlprice = $dbconn->prepare("Select price_id, season, twopax, threepax, fourpax, fivepax, sixpax, sevenpax, eightpax, show From priceSchedule ORDER BY price_id ASC") ; 
        // Execute the query, if there were variables, they could be bound within the brackets
        $sqlprice->execute() ;
        
        $specialnew = $dbconn->prepare("Select special_id, special_title, offer, special_order, show, image, blank_1 From specials ORDER BY special_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$specialnew->execute() ;
    	
    	$sqltestimonials = $dbconn->prepare("SELECT testimonial_id, title, headline, testimonial, crew, tripdate, extra_space, show FROM testimonials ORDER BY testimonial_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$sqltestimonials->execute() ;
    	
    	//$sqltut = $dbconn->prepare("Select news_id, header, update, image, blank_1 From customertut ORDER BY news_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	//$sqltut->execute() ;
    }
    
?>
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
									<a href="../Content.php?INTERNAL=<?php echo $onPage?>">Go to the Admin Screen</a>
								</p>
							</header>
						</div>				
						
						<div class="row 200%">
				        <div class="11u 12u(mobile) important(mobile)" id="content">
				                <article id="main">
				                    <h2 style="text-align: center;">Customer Pictures</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>Pic ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Title</th>
                                            <th border=1 style='border: 1px solid #000000;'>Url</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row1 = $sqlcustpics->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['pic_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['pic_title']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['image']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['show']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['blank_1']; ?></td>
                                            
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>

				                
				                <article id="main">
				                    <h2 style="text-align: center;">Customer Videos</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>Vid ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Title</th>
                                            <th border=1 style='border: 1px solid #000000;'>Url</th>
                                            <th border=1 style='border: 1px solid #000000;'>Youtube Url</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row2 = $sqlcustvids->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['vid_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['vid_title']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['image']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['video_link']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['show']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['blank_1']; ?></td>

                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>
				                
				                <article id="main">
				                    <h2 style="text-align: center;">FAQ</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>FAQ ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Question</th>
                                            <th border=1 style='border: 1px solid #000000;'>Answer</th>
                                            <th border=1 style='border: 1px solid #000000;'>FAQ Order</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row3 = $faqList->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row3['faq_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row3['question']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row3['answer']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row3['faqorder']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row3['show']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row3['blank_1']; ?></td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>
				                
				                <article id="main">
				                    <h2 style="text-align: center;">Food Images</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>Food ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Title</th>
                                            <th border=1 style='border: 1px solid #000000;'>Url</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row4 = $sqlfood->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row4['food_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row4['food_title']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row4['image']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row4['show']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row4['blank_1']; ?></td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>
				                
				                <article id="main">
				                    <h2 style="text-align: center;">News Event</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>News ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Header</th>
                                            <th border=1 style='border: 1px solid #000000;'>Update</th>
                                            <th border=1 style='border: 1px solid #000000;'>Url</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row5 = $sqlnew->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row5['news_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row5['header']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row5['update']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row5['image']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row5['blank_1']; ?></td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>
				                
				                <article id="main">
				                    <h2 style="text-align: center;">Price Schedule</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>Price ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Season</th>
                                            <th border=1 style='border: 1px solid #000000;'>2 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>3 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>4 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>5 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>6 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>7 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>8 pax</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row6 = $sqlprice->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['price_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['season']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['twopax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['threepax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['fourpax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['fivepax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['sixpax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['sevenpax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['eightpax']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row6['show']; ?></td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>
				                
				                <article id="main">
				                    <h2 style="text-align: center;">Specials</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>Special ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Special Title</th>
                                            <th border=1 style='border: 1px solid #000000;'>Offer</th>
                                            <th border=1 style='border: 1px solid #000000;'>Special Order</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                            <th border=1 style='border: 1px solid #000000;'>Url</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row7 = $specialnew->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['special_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['special_title']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['offer']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['special_order']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['show']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['image']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row7['blank_1']; ?></td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
				                </article>
				                
				                <article id="main">
				                    <h2 style="text-align: center;">Customer Testimonials</h2>
				                    <table cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                    <thead>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <th border=1 style='border: 1px solid #000000;'>Testimonial ID</th>
                                            <th border=1 style='border: 1px solid #000000;'>Title</th>
                                            <th border=1 style='border: 1px solid #000000;'>Headline</th>
                                            <th border=1 style='border: 1px solid #000000;'>Testimonial</th>
                                            <th border=1 style='border: 1px solid #000000;'>Crew</th>
                                            <th border=1 style='border: 1px solid #000000;'>Date</th>
                                            <th border=1 style='border: 1px solid #000000;'>Space Flag</th>
                                            <th border=1 style='border: 1px solid #000000;'>Show</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row8 = $sqltestimonials->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row8['testimonial_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row8['title']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row8['headline']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo nl2br($row8['testimonial'];) ?></td>
											<td border=1 style='border: 1px solid #000000;'><?php echo $row8['crew']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row8['tripdate']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row8['extra_space']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row8['show']; ?></td>
                                            
                                        </tr>
                                        <?php endwhile ?>

                                    </tbody>
                                    </table>
				                </article>
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