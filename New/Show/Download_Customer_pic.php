<?php
//include database configuration file
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
    }

//get records from database
$sqlcustpics = $dbconn->prepare("Select pic_id, pic_title, show, image, blank_1, blank_2 From customerpic ORDER BY pic_id ASC") ; 
$sqlcustpics->execute() ;

if($sqlcustpics->num_rows > 0){
    $delimiter = ",";
    $filename = "Customer_Photos_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ID', 'Picture Name', 'Show', 'Image Location', 'Blank_1', 'Blank_2');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $sqlcustpics->fetch_assoc()){
        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['pic_id'], $row['pic_title'], $row['show'], $row['image'], $row['blank_1'], $row['blank_2'], $status);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>