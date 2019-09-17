<?php

namespace App\Repositories;

use App\Services\FixerApiClient;

class FixerApiRepository
{
    /**
     * @var App\Services\FixerApiClient
     */
    private $client;

    public function __construct(FixerApiClient $client)
    {
        $this->client = $client;
    }
}
