<?php

namespace Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\InitializationJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\JsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\UrlJsonResponseHandlerAttributeTrait;

class InitializationJsonResponseHandler implements JsonResponseHandlerContract, InitializationJsonResponseHandlerContract
{
    use JsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        UrlJsonResponseHandlerAttributeTrait;

    private readonly \stdClass $response;

    public function __construct(private readonly string $json)
    {
        $this->construct();
    }
}