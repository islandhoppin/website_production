<?php
    $verifyCode = getenv('SET_VERIFY');
    $onPage = $_POST["INTERNAL"];
    if ($onPage == ""){
        header( 'Location: /Admin.html') ;
    }
    if ($onPage == $verifyCode){
        require '../connection.inc.php'; 
        // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
        $faqList = $dbconn->prepare("Select faq_id, question, answer, faqorder, show, blank_1 From faqList ORDER BY faqorder ASC") ; 
        // Execute the query, if there were variables, they could be bound within the brackets
        $faqList->execute() ;
    }
    
    // First connect to the database via your connection insert file

    

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
									<header><h2>Add FAQ</h2></header>
                                    <form action = "../Alter/submit.php" method = "post">
                                        <header style="margin-top:25px;"><h3>FAQ Question</h3></header>
                                        <textarea type="text" name="question"  rows="6" cols="30"></textarea>
                                        <header style="margin-top:25px;"><h3>FAQ Answer</h3></header>
                                        <textarea type="text" name="answer"  rows="6" cols="30"></textarea>
                                        <header style="margin-top:25px;"><h3>FAQ Order</h3></header>
                                        <input type="text" name="faqorder">
                                        <header style="margin-top:25px;"><h3>Show</h3></header>
                                        <select name="show">
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select>
                                        <br />
                                        <input type="hidden" name="INTERNAL" value="<?php echo $onPage;?>">
                                        <input type="hidden" name="table" value="faqList">
                                        <input type="submit" value="Submit">
                                    </form>
									</section>
									
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									
									<header>
										<hr />
										<h3>Learn how to add a new FAQ</h3>
									</header>
									<p>
										<b>Question:</b> The question that will appear.<br />
										<b>Answer:</b> The answer to the FAQ. <br />
										<b>FAQ Order:</b> The order they will appear in. The lower number will appear first.
										<b>Show:</b> This Yes/No indicates whether the price schedule is visible on the page.

									</p>
								</section>
							</div>
						</div>				
						
						<div class="row 200%">
				        <div class="11u 12u(mobile) important(mobile)" id="content">
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
                                            <th border=1 style='border: 1px solid #000000;'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Use a while loop to make a table row for every DB row-->
                                        <?php while( $row1 = $faqList->fetch()) : ?>
                                        <tr cellpadding='3' border=1 style='border-collapse:collapse;width:100%;border: 1px solid #000000;'>
                                            <!--Each table column is echoed in to a td cell-->
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['faq_id']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['question']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['answer']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['faqorder']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['show']; ?></td>
                                            <td border=1 style='border: 1px solid #000000;'><?php echo $row1['blank_1']; ?></td>
                                            <td border=1 style='border: 1px solid #000000; text-align:center;'>
                                            	<form action="/New/Show/UpdateFAQ.php" method="post">
                                                    <input type="hidden" name="faq_id" value=<?php echo $row1['faq_id'];?>>
                                                    <input type="hidden" name="question" value="<?php echo $row1['question']; ?>">
                                                    <input type="hidden" name="answer" value="<?php echo $row1['answer']; ?>">
                                                    <input type="hidden" name="faqorder" value="<?php echo $row1['faqorder']; ?>">
                                                    <input type="hidden" name="show" value="<?php echo $row1['show']; ?>">
                                                    <input type="hidden" name="blank_1" value="<?php echo $row1['blank_1']; ?>">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $onPage;?>">
                                                    <input type="hidden" name="table" value="faqList">
                                                  <button type="submit" value="Submit" Style="margin-top:5px;">Edit</button>
                                                </form>
                                            	<form action="../Alter/delete.php" method="post">
                                                    <input type="hidden" name="id" value="faq_id">
                                                    <input type="hidden" name="idnum" value="<?php echo $row1['faq_id']; ?>">
                                                    <input type="hidden" name="table" value="faqList">
                                                    <input type="hidden" name="INTERNAL" value="<?php echo $onPage;?>">
                                                  <button type="submit" value="Submit" Style="margin-top:5px; margin-bottom:5px; color:red;">Delete</button>
                                                </form>
                                                </td>
                                        </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                    </table>
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