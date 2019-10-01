<?php


class ConnectCrm
{
    /**
     * адрес retailCRM
     * @var string
     */
    private $url;

    /**
     * API ключ retailCRM
     * @var string
     */
    private $apiKey;

    /**
     * Подключение к CRM
     *
     * @return \RetailCrm\ApiClient
     */
    private function connectToCrm()
    {
        $client = new \RetailCrm\ApiClient(
            $this->url,
            $this->apiKey,
            \RetailCrm\ApiClient::V5
        );
        return $client;
    }

    /**
     * ConnectCrm constructor.
     * @param $url адрес retailCRM
     * @param $apiKey API ключ retailCRM
     */
    public function __construct($url, $apiKey)
    {
        $this->url = $url;
        $this->apiKey = $apiKey;
    }
}