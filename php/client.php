<?php

$curl = curl_init("http://localhost:3000");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);
var_dump($data);
print("<p> El profesor es ".$data["nombre"]." y la monitora es: ".$data["moni"]);

curl_close($curl);
