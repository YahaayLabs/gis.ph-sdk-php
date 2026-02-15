<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GisPh\Client;

// 1. Initialize the client
$client = new Client([
    'access_token' => 'your_access_token_here',
    // OR 'api_key' => 'your_api_key_here'
]);

// 2. Search for a barangay
try {
    echo "Searching for 'Manila'...\n";
    $results = $client->barangays()->search('Manila');

    foreach ($results['data'] as $barangay) {
        echo sprintf(
            "- %s (%s, %s)\n",
            $barangay['name'],
            $barangay['municipality'],
            $barangay['province']
        );
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// 3. List provinces
echo "\nListing provinces...\n";
$provinces = $client->provinces()->list(['limit' => 5]);
foreach ($provinces['data'] as $province) {
    echo "- " . $province['name'] . "\n";
}
