<?php

namespace Shahmal1yev\EasyPay\Yigim\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes\UrlJsonResponseHandlerAttributeTrait;

readonly class InitializationCommandResponseData implements ResponseDataContract
{
    use UrlJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait;

    public function __construct(private object $response)
    {
    }
}