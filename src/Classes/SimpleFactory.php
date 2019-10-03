<?php
use \RetailCrm\ApiClient;

class SimpleFactory
{
    /**
     * @param string $url
     * @param string $apiKey
     * @return ApiClient
     */
    public function createApiClient($url, $apiKey): ApiClient
    {
        return $client = new ApiClient(
            $url,
            $apiKey,
            ApiClient::V5
        );
    }
}