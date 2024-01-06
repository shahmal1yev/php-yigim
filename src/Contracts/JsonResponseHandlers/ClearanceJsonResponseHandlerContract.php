<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\MessageJsonResponseHandlerAttributeContract;

interface ClearanceJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract
{
    public const array REQUIRED_FIELDS = [
        'code',
        'message'
    ];
}