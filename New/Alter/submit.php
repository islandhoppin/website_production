<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];
$bucket = $_POST["BUCKET"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    require '../connection.inc.php'; 
        if ($bucket == "OnDeckNews" Or $bucket == "Testimonials" Or $bucket == "Specials" Or $bucket == "Food" Or $bucket == "CustomerPics" Or $bucket == "CustomerVids"){
            // Check if file was uploaded without errors
            if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];
                
                // Verify file extension
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                
                // Verify file size - 5MB maximum
                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
            
                // Verify MYME type of the file
                if(in_array($filetype, $allowed)){
                    // Check whether file exists before uploading it
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                        echo "Your file was uploaded successfully.";
                        $image = "https://dzx3g8o0zzxkn.cloudfront.net/$bucket/$filename";
                } else{
                    echo "Error: There was a problem uploading your file. Please try again."; 
                }
            } else{
                die("Error: " . $_FILES["photo"]["error"]);
            }
            
        }
    	if ($table == "newsupdates"){
    		$header = pg_escape_string($_POST["Header"]);
    		$update = pg_escape_string($_POST["update"]);
    		$today = date("F j, Y");  
    		$query = "INSERT INTO newsupdates (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
    	}
    	if ($table == "customertut"){
    		$header = pg_escape_string($_POST["Header"]);
    		$update = pg_escape_string($_POST["update"]);
    		$today = date("F j, Y");
    		$query = "INSERT INTO customertut (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
    	}
    	if ($table == "faqList"){
    		$question = pg_escape_string($_POST["question"]);
    		$answer = pg_escape_string($_POST["answer"]);
    		$faqorder = $_POST["faqorder"];
    		$show = pg_escape_string($_POST["show"]);
    		$today = date("F j, Y");
    		$query = "INSERT INTO faqList (question, answer, faqorder, show, blank_1) VALUES ('$question', '$answer', '$faqorder', '$show', '$today')";
    	}
    	if ($table == "priceSchedule"){
    		$season = pg_escape_string($_POST["season"]);
    		$twopax = pg_escape_string($_POST["twopax"]);
    		$threepax = pg_escape_string($_POST["threepax"]);
    		$fourpax = pg_escape_string($_POST["fourpax"]);
    		$fivepax = pg_escape_string($_POST["fivepax"]);
    		$sixpax = pg_escape_string($_POST["sixpax"]);
    		$sevenpax = pg_escape_string($_POST["sevenpax"]);
    		$eightpax = pg_escape_string($_POST["eightpax"]);
    		$show = $_POST["show"];
    		$query = "INSERT INTO priceSchedule (season, twopax, threepax, fourpax, fivepax, sixpax, sevenpax, eightpax, show) VALUES ('$season', '$twopax', '$threepax', '$fourpax', '$fivepax', '$sixpax', '$sevenpax', '$eightpax', '$show')";
    	}
    	if ($table == "specials"){
    		$specialTitle = pg_escape_string($_POST["specialTitle"]);
    		$offer = pg_escape_string($_POST["offer"]);
    		$today = date("F j, Y");
    		$specialorder = $_POST["special_order"];
    		$show = pg_escape_string($_POST["show"]);
    		$query = "INSERT INTO specials (special_title, offer, special_order, show, image, blank_1) VALUES ('$specialTitle', '$offer', '$specialorder', '$show', '$image', '$today')";
    	}
    	if ($table == "food"){
    		$foodTitle = pg_escape_string($_POST["foodTitle"]);
    		$today = date("F j, Y");
    		$show = pg_escape_string($_POST["show"]);
    		$query = "INSERT INTO food (food_title, show, image, blank_1) VALUES ('$foodTitle', '$show', '$image', '$today')";
    	}
    	if ($table == "customerpic"){
    		$picTitle = pg_escape_string($_POST["picTitle"]);
    		$today = date("F j, Y");
    		$show = pg_escape_string($_POST["show"]);
    		$query = "INSERT INTO customerpic (pic_title, show, image, blank_1) VALUES ('$picTitle', '$show', '$image', '$today')";
    	}
    	if ($table == "customervid"){
    	    $video_link = $_POST["videoLink"];
    		$vidTitle = pg_escape_string($_POST["vidTitle"]);
    		$today = date("F j, Y");
    		$show = pg_escape_string($_POST["show"]);
    		$query = "INSERT INTO customervid (vid_title, show, video_link, image, blank_1) VALUES ('$vidTitle', '$show', '$video_link', '$image', '$today')";
    	}
    $dbconn->query($query);
        
    
}


if ($bucket == "OnDeckNews" Or $bucket == "Testimonials" Or $bucket == "Specials" Or $bucket == "Food" Or $bucket == "CustomerPics" Or $bucket == "CustomerVids"){
    $subids = Array
    (
        'BUCKET' => $bucket,
        'FILENAME' => $filename,
        'CONTENT' => $filetype,
        'INTERNAL' => $onPage
    );
    header("Location: /New/Alter/uploadPhoto.php?".http_build_query($subids));
} else header('Location: ../Content.php?INTERNAL='.$onPage);

?>
