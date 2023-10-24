<?php

namespace App\Service;

use GuzzleHttp\ClientInterface;
use function GuzzleHttp\json_decode;

class CatApiService
{

    /**
     * The API HTTP client
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * Create a new CatApiService instance
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Search by cat breeds by name
     *
     * @param string $name
     * @return array
     */
    public function searchByName(string $name)
    {
        $response = $this->client->request('get', 'breeds/search', [
            'query' => [
                'q' => $name
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
