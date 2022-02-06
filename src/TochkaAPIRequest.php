<?php


namespace FEDmns\Test;

use guzzlehttp\guzzle\Client;

class TochkaAPIRequest
{

    public function __construct() {

        $client = new \GuzzleHttp\Client();

        $param =['client_id' => 'sandbox',
            'client_secret' => 'sandbox_secret',
            'grant_type' => 'client_credentials',
            'scope' => 'accounts',
            'state' => 'qwe'];

        $response = $client->request('POST', 'https://enter.tochka.com/connect/token', ['form_params' => $param]);

        print_r($response->getBody()->getContents());

    }
}