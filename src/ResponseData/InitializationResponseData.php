<?php

namespace Shahmal1yev\EasyPay\Yigim\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\UrlJsonResponseHandlerAttributeTrait;

readonly class InitializationResponseData implements ResponseDataContract
{
    use UrlJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait;

    public function __construct(private object $response)
    {
    }
}