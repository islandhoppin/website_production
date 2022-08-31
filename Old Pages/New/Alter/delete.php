<?php 
require __DIR__ . '/../../vendor/autoload.php';
use Aws\S3\S3Client;

$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];
$bucket = $_POST["BUCKET"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    $id = $_POST["id"];
    $idnum = $_POST["idnum"];
    require '../connection.inc.php'; 
    $query = "Delete from $table where $id = $idnum";
    $dbconn->query($query);
}

if ($bucket == "OnDeckNews" Or $bucket == "Testimonials" Or $bucket == "Specials" Or $bucket == "Food" Or $bucket == "CustomerPics" Or $bucket == "CustomerVids"){
    $secretKey = getenv('IAM_SECRET');
    $key = getenv('IAM_KEY');
    
    $s3 = S3Client::factory([
        'version' => 'latest',
        'region'  => 'us-east-2',
        'credentials' => array(
            'key' => "$key",
            'secret'  => "$secretKey"
        )]);

    
    $bucket = "islandhoppin";
    $IMAGE = $_POST["IMAGE"];
    $keyname = substr($IMAGE, 37);
    $result = $s3->deleteObject(array(
        'Bucket' => $bucket,
        'Key'    => $keyname
    ));       
}

header('Location: ../Content.php?INTERNAL='.$onPage);

?>