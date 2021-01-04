<?php
$assetId = $_GET['assetId'];
$data = file_get_contents("http://www.roblox.com/asset/?id=$assetId");
$xml = simplexml_load_string($data) or die("Error: Cannot create object: ".$_GET['assetId']);
$parsed = json_decode(json_encode($xml),true);
$data = ($parsed['Item']['Properties']['Content']['url']);
$data = explode('http://www.roblox.com/asset/?id=',$data)[1];
echo($data);
?>
