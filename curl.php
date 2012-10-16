<?php

$curl = curl_init();

$fd = fopen('/tmp/test', 'wb');
curl_setopt($curl, CURLOPT_FILE, $fd);

$copy = curl_copy_handle($curl);

var_dump($copy);

curl_close($copy);
curl_close($curl);
fclose($fd);