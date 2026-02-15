<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GIS.PH API Credentials
    |--------------------------------------------------------------------------
    |
    | Your personal access token or API key for api.gis.ph.
    | You can get these at https://gis.ph
    |
    */

    'access_token' => env('GISPH_ACCESS_TOKEN'),
    'api_key' => env('GISPH_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL for the GIS.PH API.
    |
    */

    'base_url' => env('GISPH_BASE_URL', 'https://api.gis.ph/v1'),
];
