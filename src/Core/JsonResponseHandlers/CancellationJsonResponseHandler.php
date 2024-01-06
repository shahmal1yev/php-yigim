<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\CancellationJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeTrait;

class CancellationJsonResponseHandler implements JsonResponseHandlerContract, CancellationJsonResponseHandlerContract
{
    use MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait;
}