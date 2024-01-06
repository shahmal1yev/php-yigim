<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\MessageJsonResponseHandlerAttributeContract;

interface RefundJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract
{
    public const array REQUIRED_FIELDS = [
        'code',
        'message'
    ];
}