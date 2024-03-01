<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\MessageJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\UrlJsonResponseHandlerAttributeContract;

interface InitializationJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, UrlJsonResponseHandlerAttributeContract
{
    public const REQUIRED_FIELDS = [
        'url',
        'code',
        'message'
    ];
}