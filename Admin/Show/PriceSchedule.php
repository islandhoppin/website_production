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
        $priceQuery = '{"query":"query {priceScheduleCollection(order: orderId_ASC) {items {season orderId show pax2 pax3 pax4 pax5 pax6 pax7 pax8}}}"}';
    	$priceSchedule = getData($priceQuery);
	    //$priceScheduleCount = count($priceSchedule['data']['priceScheduleCollection']['items']);
		
		date_default_timezone_set('US/Eastern');
    	$downloadData = "PriceSchedule-" . date("Y-m-d_h:i:sa") . ".csv";
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
        							<h1 style="color:green">Price Schedule Table</h1>
								    <table border="1" cellspacing="0" cellpadding="10">
							            <tr>
							                <th>Season</th>
							                <th>Order ID</th>
							                <th>Show</th>
							                <th>pax2</th>
							                <th>pax3</th>
							                <th>pax4</th>
							                <th>pax5</th>
							                <th>pax6</th>
							                <th>pax7</th>
							                <th>pax8</th>
							            </tr>
							            <?php foreach($priceSchedule['data']['priceScheduleCollection']['items'] as $value) : ?>
							            <tr>
							                <th><?php echo $value['season']; ?></th>
							                <th><?php echo $value['orderId']; ?></th>
							                <th><?php if($value['show'] === TRUE) { echo "Yes";} else {echo "No";} ?></th>
							                <th><?php echo $value['pax2']; ?></th>
							                <th><?php echo $value['pax3']; ?></th>
							                <th><?php echo $value['pax4']; ?></th>
							                <th><?php echo $value['pax5']; ?></th>
							                <th><?php echo $value['pax6']; ?></th>
							                <th><?php echo $value['pax7']; ?></th>
							                <th><?php echo $value['pax8']; ?></th>
							            </tr>
							            <?php endforeach; ?>
							        </table>
							        <br><br>
							        <button type="button" onclick="tableToCSV()">
							            download CSV
							        </button>
								    
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
			<script type="text/javascript">
		        function tableToCSV() {
		
		            // Variable to store the final csv data
		            var csv_data = [];
		
		            // Get each row data
		            var rows = document.getElementsByTagName('tr');
		            for (var i = 0; i < rows.length; i++) {
		
		                // Get each column data
		                var cols = rows[i].querySelectorAll('td,th');
		
		                // Stores each csv row data
		                var csvrow = [];
		                for (var j = 0; j < cols.length; j++) {
		
		                    // Get the text data of each cell
		                    // of a row and push it to csvrow
		                    readData = cols[j].innerHTML
		                    readData = readData.replace(/(\r\n|\n|\r|\s+|\t|&nbsp;)/gm,' ');
		                    //readData = readData.replace(/,/g, '\,');
		                    readData = readData.replace(/"/g, '""');
		                    //readData = readData.replace(/'/g, '\'');
		                    readData = readData.replace(/ +(?= )/g,'');
		                    readData = '"' + readData + '"';
		                    csvrow.push(readData);
		                    //csvrow.push(cols[j].innerHTML);
		                }
		
		                // Combine each column value with comma
		                csv_data.push(csvrow.join(","));
		            }
		
		            // Combine each row data with new line character
		            csv_data = csv_data.join('\n');
		
		            // Call this function to download csv file
		            downloadCSVFile(csv_data);
		
		        }
		
		        function downloadCSVFile(csv_data) {
		
		            // Create CSV file object and feed
		            // our csv_data into it
		            CSVFile = new Blob([csv_data], {
		                type: "text/csv"
		            });
		
		            // Create to temporary link to initiate
		            // download process
		            var temp_link = document.createElement('a');
		
		            // Download csv file
		            //temp_link.download = "PriceSchedule.csv";
		            temp_link.download = '<?php echo $downloadData; ?>'
		
		            var url = window.URL.createObjectURL(CSVFile);
		            temp_link.href = url;
		
		            // This link should not be displayed
		            temp_link.style.display = "none";
		            document.body.appendChild(temp_link);
		
		            // Automatically click the link to
		            // trigger download
		            temp_link.click();
		            document.body.removeChild(temp_link);
		        }
		    </script>

	</body>
</html>