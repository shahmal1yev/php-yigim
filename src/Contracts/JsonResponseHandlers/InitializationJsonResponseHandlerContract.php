<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\MessageJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\UrlJsonResponseHandlerAttributeContract;

interface InitializationJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, UrlJsonResponseHandlerAttributeContract
{
    public const REQUIRED_FIELDS = [
        'url',
        'code',
        'message'
    ];
}