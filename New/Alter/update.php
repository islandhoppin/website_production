<?php 
require __DIR__ . '/../../vendor/autoload.php';
use Aws\S3\S3Client;

$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];
$Update = $_POST["UPDATE"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    require '../connection.inc.php';
        if ($Update == "Yes"){
            if ($table =="newsupdates"){
                $bucket = "OnDeckNews";
            } elseif ($table =="customertut"){
                $bucket = "Testimonials";
            } elseif ($table =="specials"){
                $bucket = "Specials";
            } elseif ($table =="food"){
                $bucket = "Food";
            } elseif ($table =="customerpic"){
                $bucket = "CustomerPics";
            } elseif ($table =="customervid"){
                $bucket = "CustomerVids";
            }
        } elseif ($Update == "No"){
            $image = $_POST["IMAGE"];
        }  
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
                    if(file_exists("upload/" . $_FILES["photo"]["name"])){
                        echo $_FILES["photo"]["name"] . " is already exists.";
                    } else{
                        move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                        echo "Your file was uploaded successfully.";
                        
                        //delete old record
                        $secretKey = getenv('IAM_SECRET');
                        $key = getenv('IAM_KEY');

                        $s3 = S3Client::factory([
                            'version' => 'latest',
                            'region'  => 'us-east-2',
                            'credentials' => array(
                                'key' => "$key",
                                'secret'  => "$secretKey"
                            )]);
                    
                        
                        $oldBUCKET = "islandhoppin";
                        $oldIMAGE = $_POST["IMAGE"];
                        $keyname = substr($oldIMAGE, 37);
                        $result = $s3->deleteObject(array(
                            'Bucket' => $oldBUCKET,
                            'Key'    => $keyname
                        ));
                        
                        //set new url of record
                        $image = "https://dzx3g8o0zzxkn.cloudfront.net/$bucket/$filename";
                    } 
                } else{
                    echo "Error: There was a problem uploading your file. Please try again."; 
                }
            } else{
                die("Error: " . $_FILES["photo"]["error"]);
            }
                
        }
    	if ($table == "newsupdates"){
    		$key = $_POST["id"];
    		$header = pg_escape_string($_POST["Header"]);
    		$today = pg_escape_string($_POST["date"]);
    		$update = pg_escape_string($_POST["update"]);
    		$query = "UPDATE newsupdates SET header = '$header', update = '$update', image = '$image', blank_1 = '$today' WHERE news_id = $key";
    	}
    	if ($table == "customertut"){
    		$key = $_POST["id"];
    		$header = pg_escape_string($_POST["Header"]);
    		$today = pg_escape_string($_POST["date"]);
    		$update = pg_escape_string($_POST["update"]);
    		$query = "UPDATE customertut SET header = '$header', update = '$update', image = '$image', blank_1 = '$today' WHERE news_id = $key";
    	}
    	if ($table == "faqList"){
    		$faq_id = $_POST["faq_id"];
    		$question = pg_escape_string($_POST["question"]);
    		$answer = pg_escape_string($_POST["answer"]);
    		$faqorder = $_POST["faqorder"];
    		$show = pg_escape_string($_POST["show"]);
    		$today = $_POST["blank_1"];
    		$query = "UPDATE faqList SET question = '$question', answer = '$answer', faqorder = '$faqorder', show = '$show', blank_1 = '$today' WHERE faq_id = $faq_id";
    	}
    	if ($table == "priceSchedule"){
    		$price_id = $_POST["price_id"];
    		$season = pg_escape_string($_POST["season"]);
    		$twopax = pg_escape_string($_POST["twopax"]);
    		$threepax = pg_escape_string($_POST["threepax"]);
    		$fourpax = pg_escape_string($_POST["fourpax"]);
    		$fivepax = pg_escape_string($_POST["fivepax"]);
    		$sixpax = pg_escape_string($_POST["sixpax"]);
    		$sevenpax = pg_escape_string($_POST["sevenpax"]);
    		$eightpax = pg_escape_string($_POST["eightpax"]);
    		$show = $_POST["show"];
    		$query = "UPDATE priceSchedule SET season = '$season', twopax = '$twopax', threepax = '$threepax', fourpax = '$fourpax', fivepax = '$fivepax', sixpax = '$sixpax', sevenpax = '$sevenpax', eightpax = '$eightpax', show = '$show' WHERE price_id = $price_id";
    	}
    	if ($table == "specials"){
    		$key = $_POST["id"];
    		$specialTitle = pg_escape_string($_POST["specialTitle"]);
    		$offer = pg_escape_string($_POST["offer"]);
    		$today = pg_escape_string($_POST["date"]);
    		$specialorder = $_POST["specialorder"];
    		$show = pg_escape_string($_POST["show"]);
    		$query = "UPDATE specials SET special_title = '$specialTitle', offer = '$offer', special_order = '$specialorder', show = '$show', image = '$image', blank_1 = '$today' WHERE special_id = $key";
    	}
    	if ($table == "food"){
    		$key = $_POST["id"];
    		$foodTitle = pg_escape_string($_POST["foodTitle"]);
    		$today = pg_escape_string($_POST["date"]);
    		$show = pg_escape_string($_POST["show"]);
    		$query = "UPDATE food SET food_title = '$foodTitle', show = '$show', image = '$image', blank_1 = '$today' WHERE food_id = $key";
    	}
    	if ($table == "customerpic"){
    		$key = $_POST["id"];
    		$picTitle = pg_escape_string($_POST["picTitle"]);
    		$today = pg_escape_string($_POST["date"]);
    		$show = pg_escape_string($_POST["show"]);
    		$query = "UPDATE customerpic SET pic_title = '$picTitle', show = '$show', image = '$image', blank_1 = '$today' WHERE pic_id = $key";
    	}
    	if ($table == "customervid"){
    		$key = $_POST["id"];
    		$video_link = $_POST["video_link"];
    		$vidTitle = pg_escape_string($_POST["vidTitle"]);
    		$today = pg_escape_string($_POST["date"]);
    		$show = pg_escape_string($_POST["show"]);
    		$query = "UPDATE customervid SET vid_title = '$vidTitle', show = '$show', video_link = '$video_link', image = '$image', blank_1 = '$today' WHERE vid_id = $key";
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
