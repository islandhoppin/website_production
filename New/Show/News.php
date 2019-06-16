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
        require '../connection.inc.php'; 
        // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
    	$sqlnew = $dbconn->prepare("Select news_id, header, update, image, blank_1 From newsupdates ORDER BY news_id ASC") ; 
    	// Execute the query, if there were variables, they could be bound within the brackets
    	$sqlnew->execute() ;
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
									<header><h2>Add News Event</h2></header>
                                    <form action = "../Alter/submit.php" method = "post" enctype="multipart/form-data">
        		                        <header><h3>Header</h3></header>
                                        <input type="text" name="Header">
                                        <header style="margin-top:25px;"><h3>Update Text</h3></header>
                                        <textarea type="text" name="update"  rows="6" cols="30"></textarea>
                                        <header style="margin-top:25px;"><h3>File Upload</h3></header>
                                        <input type="file" name="photo" id="fileSelect">
                                        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                                        <br />
                                        <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                        <input type="hidden" name="BUCKET" value="OnDeckNews">
                                        <input type="hidden" name="table" value="newsupdates">
                                        <input type="submit" value="Submit">
                                    </form>
									</section>
									
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3>Learn how to submit News Events</h3>
									</header>
									<p>
										<b>Header:</b> This will display below the image.<br />
										<b>Date:</b> Today's date will automatically be inserted into the site, Changing the date is support by editing the row after submission. <br />
										<b>Update Text:</b> This will the text of the news event. <br />
										<b>Image:</b>Before Uploading ensure the image is Rectangular Photo: 1200px by 902px; Long: 1024px by 1280px <a href="http://picresize.com/" target="_blank">Image Resizer</a>.<br />
										<b>URL:</b> This process is shown in the video button below. No additional alteration of the url is need for content delivery.
										<br /><b>The current query supports the 9 most recent posts, placing them in the order of most recent on top.</b>
									</p>
								</section>
							</div>
						</div>
						
						<div class="row 200%">
				        <div class="11u 12u(mobile) important(mobile)" id="content">
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
                                            <th border=1 style='border: 1px solid #000000;'>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row2 = $sqlnew->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['news_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['header']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['update']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><a href="<?php echo $row2['image']; ?>" target="_blank">Click to Preview</a></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row2['blank_1']; ?></td>
                                            <td border=1 style='border: 1px solid #000000; text-align:center;'>
                                            	<form action="/New/Show/UpdateNewTut.php" method="post">
                                                    <input type="hidden" name="news_id" value="<?php echo $row2['news_id']; ?>">
                                                    <input type="hidden" name="table" value="newsupdates">
                                                    <input type="hidden" name="Header" value="<?php echo $row2['header']; ?>">
                                                    <input type="hidden" name="Update" value="<?php echo $row2['update']; ?>">
                                                    <input type="hidden" name="Image" value="<?php echo $row2['image']; ?>">
                                                    <input type="hidden" name="date" value="<?php echo $row2['blank_1']; ?>">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                  <button type="submit" value="Submit" Style="margin-top:5px;">Edit</button>
                                                </form>
                                            	<form action="../Alter/delete.php" method="post">
                                                    <input type="hidden" name="id" value="news_id">
                                                    <input type="hidden" name="idnum" value=<?php echo $row2['news_id']; ?>>
                                                    <input type="hidden" name="table" value="newsupdates">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $verifyCode;?>">
                                                    <input type="hidden" name="BUCKET" value="OnDeckNews">
                                                    <input type="hidden" name="IMAGE" value="<?php echo $row2['image']; ?>">
                                                  <button type="submit" value="Submit" Style="margin-top:5px; margin-bottom:5px; color:red;">Delete</button>
                                                </form></td>
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