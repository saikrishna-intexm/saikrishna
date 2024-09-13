<?php
$senddata['web_device_id'] = $_POST['token'];
$senddata['product_id'] = 3;
$curlUrl = 'https://engage.intexmmedia.com/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $curlUrl.'welcome/insertFcmTokenCurl');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $senddata);
$curlresult = curl_exec($ch);
curl_close($ch);
echo $curlresult;
?>