<?php

namespace GisPh\Tests\Unit;

use GisPh\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function test_client_initializes_with_array_config(): void
    {
        $client = new Client([
            'access_token' => 'test-token',
            'api_key' => 'test-key',
        ]);

        $this->assertInstanceOf(Client::class, $client);
    }

    public function test_client_exposes_resources(): void
    {
        $client = new Client();

        $this->assertInstanceOf(\GisPh\Resources\Barangays::class, $client->barangays());
        $this->assertInstanceOf(\GisPh\Resources\Provinces::class, $client->provinces());
    }
}
