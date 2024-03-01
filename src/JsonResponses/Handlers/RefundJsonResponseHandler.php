<?php

namespace Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\RefundJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\JsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;

class RefundJsonResponseHandler implements JsonResponseHandlerContract, RefundJsonResponseHandlerContract
{
    use JsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait;

    private readonly \stdClass $response;

    public function __construct(private readonly string $json)
    {
        $this->construct();
    }
}