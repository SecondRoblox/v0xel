<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$url = $_GET['url'];
echo file_get_contents($url);
?>
