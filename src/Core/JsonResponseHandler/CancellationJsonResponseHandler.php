<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandler;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\CancellationJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeTrait;

class CancellationJsonResponseHandler implements JsonResponseHandlerContract, CancellationJsonResponseHandlerContract
{
    use MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait;
}