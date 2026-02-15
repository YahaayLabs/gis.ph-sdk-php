# GIS.PH PHP SDK

Official PHP SDK for api.gis.ph, with first-class support for Laravel.

## Roadmap

### Phase 1: Core SDK
- Basic HTTP client wrapper (Guzzle)
- Configuration management
- Barangay Resource (list, get, search)
- Province Resource (list, get)
- Error handling (structured exceptions)

## Authentication

This SDK requires an **Access Token** or **API Key** from [**gis.ph**](https://gis.ph). You can sign up and retrieve your credentials from your account dashboard.

## Usage

### Standard PHP
```php
use GisPh\Client;

$client = new Client(['access_token' => 'YOUR_TOKEN']);
$results = $client->barangays()->search('Manila');
```

### Laravel
```php
use GisPh\Laravel\Facades\GisPh;

$results = GisPh::barangays()->search('Manila');
```

### Phase 2: Laravel Integration
- Laravel Service Provider
- Configuration publishing
- Facade support
- Automatic authentication injection

### Phase 3: Advanced Features
- Geographical utilities
- Result caching (Laravel cache integration)
- Metadata helpers

## Local Development & Testing

To test this SDK locally in another project (e.g., a Laravel application) without publishing it to Packagist:

1. In your **consumer project's** `composer.json`, add this repository:
   ```json
   {
       "repositories": [
           {
               "type": "path",
               "url": "../gis.ph-sdk-php"
           }
       ]
   }
   ```
2. Run the install command:
   ```bash
   composer require yahaaylabs/gis.ph-sdk-php:dev-main
   ```

## Project Structure
...
