<?php

namespace GisPh\Laravel\Facades;

use GisPh\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \GisPh\Resources\Barangays barangays()
 * @method static \GisPh\Resources\Provinces provinces()
 * 
 * @see \GisPh\Client
 */
class GisPh extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Client::class;
    }
}
