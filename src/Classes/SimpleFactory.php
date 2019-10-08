<?php
use \RetailCrm\ApiClient;

class SimpleFactory
{
    /**
     * Поделючение к retailCRM
     *
     * @param string $url адрес retailCRM
     * @param string $apiKey API ключ retailCRM
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