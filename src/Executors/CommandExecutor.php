<?php

namespace Shahmal1yev\EasyPay\Yigim\Executors;

use http\Exception\InvalidArgumentException;
use http\Exception\RuntimeException;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Enums\CommandEndpointEnum;

readonly class CommandExecutor
{
    private string $responseHandler;

    public function __construct(
        private CommandEndpointEnum      $endpoint,
        private CommandAttributeContract $attributer,
        string                           $responseHandler
    )
    {
        if (! in_array(JsonResponseHandlerContract::class, class_implements($responseHandler)))
            throw new InvalidArgumentException("'$responseHandler': Provided invalid JSON response handler");

        $this->responseHandler = $responseHandler;
    }

    public function execute(): JsonResponseHandlerContract
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_URL, $this->buildURL());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);

        if ($response === false)
            throw new RuntimeException("cURL request failed: " . curl_error($ch));

        return new $this->responseHandler($response);
    }

    public function setAttribute(): CommandAttributeContract
    {
        return $this->attributer;
    }

    private function buildURL(): string
    {
        $attributes = $this->attributer->getAttributes();

        return "{$this->endpoint}?" . http_build_query($attributes);
    }
}