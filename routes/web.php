<?php

use GuzzleHttp\Client;

Route::get('/', function ()
 {
    $client = new Client([
    	'base_uri' => 'https://staging.boolean.mx/api/zip-codes/{zip_code}',
    	/*'timeout' => 0.3*/
    ]);

    /*SE COMPRUEBA LA INSERCION DE CODIGOS POSTALES*/
/*	
	
	$response = $client->request('GET','79610');
	$data = json_decode($response->getBody()->getContents());
    dd($data);*/
});

