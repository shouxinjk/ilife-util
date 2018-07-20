<?php
//声明CODE，获取小程序传过来的CODE
$collection = $_GET["collection"];
$key = $_GET["key"];
$data = $_GET["data"];
$url = "https://data.shouxinjk.net/_db/sea/".$collection."/".$key;
$headers = array('Content-Type: application/json');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($curl);
curl_close($curl);
echo $response;
?>