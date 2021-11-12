<?php

$url = "https://jsonplaceholder.typicode.com/users";

$opciones = array('http' =>
    array(
        'method' => 'GET',
        'max_redirects' => '0',
        'ignore_errors' => '1'
    )
);

$contexto = stream_context_create($opciones);
$flujo = fopen($url, 'r', false, $contexto);

// información de cabeceras y meta datos
// sobre el flujo
var_dump(stream_get_meta_data($flujo));

// datos reales en $url
var_dump(stream_get_contents($flujo));
fclose($flujo);


?>