<?php

namespace GisPh;

use GisPh\Core\Config;
use GisPh\Resources\Barangays;
use GisPh\Resources\Provinces;
use GuzzleHttp\Client as GuzzleClient;

class Client
{
    private GuzzleClient $httpClient;
    private Config $config;

    public function __construct(Config|array $config = [])
    {
        $this->config = $config instanceof Config ? $config : Config::fromArray($config);

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        if ($this->config->accessToken) {
            $headers['Authorization'] = 'Bearer ' . $this->config->accessToken;
        } elseif ($this->config->apiKey) {
            $headers['Authorization'] = 'Bearer ' . $this->config->apiKey;
        }

        if ($this->config->apiKey) {
            $headers['X-API-Key'] = $this->config->apiKey;
        }

        $this->httpClient = new GuzzleClient([
            'base_uri' => rtrim($this->config->baseUrl, '/') . '/',
            'headers' => $headers,
        ]);
    }

    public function barangays(): Barangays
    {
        return new Barangays($this->httpClient);
    }

    public function provinces(): Provinces
    {
        return new Provinces($this->httpClient);
    }
}
