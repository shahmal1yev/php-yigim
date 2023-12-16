<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandler;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\InitializationJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\UrlJsonResponseHandlerAttributeTrait;

class InitializationJsonResponseHandler implements JsonResponseHandlerContract, InitializationJsonResponseHandlerContract
{
    private \stdClass $response;
    private const array REQUIRED_FIELDS = [
        'url',
        'code',
        'message'
    ];

    use MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        UrlJsonResponseHandlerAttributeTrait;

    public function __construct(string $json)
    {
        $response = json_decode($json);

        if (json_last_error() !== JSON_ERROR_NONE)
            throw new \InvalidArgumentException("Invalid JSON provided for '{$this::class}': " . json_last_error_msg());

        foreach(self::REQUIRED_FIELDS as $required)
            if (! isset($response->$required))
                throw new \LogicException("Required values do not exist in JSON for '{$this::class}'");

        $this->response = $response;
    }
}