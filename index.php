<?php

$token = '08022019@aliexpress-op.ru:' . md5("08022019@aliexpress-op.ru".date("dmYh", time())."Test-4247c-3fc638-4b18-a01ed-1264T");
$headers = array (
    'Authorization: AccessToken 08022019@aliexpress-op.ru:89fe9843cf40838e62a3a81be60ce761',
    'Content-Type: multipart/form-data',
    'Accept: application/json'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_URL,"https://alix.brand.company/api_top3/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,"method=aliexpress.solution.product.list.get&product_status_type=onSelling&owner_member_id=1970273");


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

echo $server_output;
