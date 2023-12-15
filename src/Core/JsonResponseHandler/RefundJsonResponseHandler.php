<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandler;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\RefundJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeTrait;

class RefundJsonResponseHandler implements JsonResponseHandlerContract, RefundJsonResponseHandlerContract
{
    use MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait;
}