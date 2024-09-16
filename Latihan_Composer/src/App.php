<?php

namespace App;

use GuzzleHttp\Client;

class App
{
    public function __construct()
    {
        // Load .env file
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        // Set timezone dari .env
        date_default_timezone_set($_ENV['TIMEZONE']);
    }

    public function getApiData()
    {
        $client = new Client();
        $response = $client->request('GET', $_ENV['API_URL']);
        return json_decode($response->getBody(), true);
    }

    public function getCurrentTime()
    {
        return date('Y-m-d H:i:s');
    }
}
