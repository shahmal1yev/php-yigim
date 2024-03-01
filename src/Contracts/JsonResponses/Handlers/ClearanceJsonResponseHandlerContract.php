<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\MessageJsonResponseHandlerAttributeContract;

interface ClearanceJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract
{
    public const array REQUIRED_FIELDS = [
        'code',
        'message'
    ];
}