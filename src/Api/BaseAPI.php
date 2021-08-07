<?php

namespace CryptoUnifier\Api;

use GuzzleHttp\Client;

abstract class BaseAPI
{
    protected Client $client;

    protected string $baseEndpoint = 'https://next.cryptounifier.io/api/v1/';

    protected string $apiKey;

    protected string $secretKey;

    public function __construct(string $suffix, array $headers)
    {
        $this->client = new Client([
            'base_uri'    => $this->baseEndpoint . $suffix . '/',
            'http_errors' => false,
            'headers'     => $headers,
        ]);
    }

    public function executeRequest(string $method, string $uri, array $body = [])
    {
        $options = array_filter([
            'form_params' => $body,
        ]);

        return json_decode($this->client->request($method, $uri, $options)->getBody());
    }
}
