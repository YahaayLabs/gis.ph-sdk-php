<?php

namespace GisPh\Core;

class Config
{
    public function __construct(
        public readonly ?string $accessToken = null,
        public readonly ?string $apiKey = null,
        public readonly string $baseUrl = 'https://api.gis.ph/v1'
    ) {
    }

    public static function fromArray(array $config): self
    {
        return new self(
            accessToken: $config['access_token'] ?? $config['accessToken'] ?? null,
            apiKey: $config['api_key'] ?? $config['apiKey'] ?? null,
            baseUrl: $config['base_url'] ?? $config['baseUrl'] ?? 'https://api.gis.ph/v1'
        );
    }
}
