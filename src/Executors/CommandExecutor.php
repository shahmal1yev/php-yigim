<?php

namespace Shahmal1yev\EasyPay\Yigim\Executors;

use http\Exception\InvalidArgumentException;
use http\Exception\RuntimeException;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Enums\Endpoint;

class CommandExecutor
{
    private readonly CommandAttributerContract $attributer;
    private readonly string $responseHandler;

    public function __construct(
        private readonly Endpoint $endpoint,
        string                    $attributer,
        string                    $responseHandler
    )
    {
        if (! in_array(JsonResponseHandlerContract::class, class_implements($responseHandler)))
            throw new InvalidArgumentException("'$responseHandler': Provided invalid JSON response handler");

        $this->responseHandler = $responseHandler;

        if (! in_array(CommandAttributerContract::class, class_implements($attributer)))
            throw new InvalidArgumentException("'$attributer': Provided invalid command attributer");

        $this->attributer = new $attributer;
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

    public function setAttribute(): CommandAttributerContract
    {
        return $this->attributer;
    }

    private function buildURL(): string
    {
        $attributes = $this->attributer->getAttributes();

        return "{$this->endpoint->value}?" . http_build_query($attributes);
    }
}