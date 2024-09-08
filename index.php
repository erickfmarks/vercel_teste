<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.csmvno.com.br/api_producao/index.php?integracao/cupomInfluencer',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Token: eyJpZF9jbGllIjoiMTQifQ==',
    'TokenJWT: 98c0896f0f4d47cfd695250270b3898a05ff12843cd7a2b82bd2'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
