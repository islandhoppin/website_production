<?php
require __DIR__ . '/../../vendor/autoload.php';

use Aws\S3\S3Client;
//get file information
$where = $_GET["BUCKET"];
$Fname = $_GET["FILENAME"];
$Ftype = $_GET["CONTENT"];
$onPage = $_GET["INTERNAL"];

$secretKey = getenv('IAM_SECRET');
$key = getenv('IAM_KEY');

$bucket = "islandhoppin";
$keyname = "$where/$Fname";
// $filepath should be absolute path to a file on disk                      
$filepath = __DIR__ . "/upload/$Fname";
// Instantiate the client.
$s3 = S3Client::factory(array(
  'version' => 'latest',
  'region'  => 'us-east-2',
  'credentials' => array(
    'key' => "$key",
    'secret'  => "$secretKey"
  )
));

// Upload a file.
$result = $s3->putObject(array(
    'Bucket'       => $bucket,
    'Key'          => $keyname,
    'SourceFile'   => $filepath,
    'ContentType'  => $Ftype,
    'ACL'          => 'public-read',
    'StorageClass' => 'STANDARD',
    'CacheControl' => 'max-age= 604800'
    
));
echo $result['ObjectURL'];
header('Location: ../Content.php?INTERNAL='.$onPage);
?>