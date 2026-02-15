<?php

namespace GisPh\Resources;

use GuzzleHttp\Client as GuzzleClient;
use Psr\Http\Message\ResponseInterface;

abstract class BaseResource
{
    public function __construct(
        protected GuzzleClient $httpClient
    ) {
    }

    protected function get(string $uri, array $query = []): array
    {
        $response = $this->httpClient->request('GET', ltrim($uri, '/'), [
            'query' => $query,
        ]);

        return $this->parseResponse($response);
    }

    protected function parseResponse(ResponseInterface $response): array
    {
        $contents = $response->getBody()->getContents();
        return json_decode($contents, true) ?? [];
    }
}
