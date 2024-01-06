<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\StatusJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\AmountJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\ApprovalJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\BillerJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\CurrencyJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\DatetimeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\ExpiryJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\ExtraJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\FeeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\IssuerJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\MethodJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\OffsetJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\PanJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\ReferenceJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\RefundJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\RrnJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\StatusJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\SystemJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\ThreeDSJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\TokenJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute\TypeJsonResponseHandlerAttributeTrait;

class StatusJsonResponseHandler implements JsonResponseHandlerContract, StatusJsonResponseHandlerContract
{
    use ExtraJsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        StatusJsonResponseHandlerAttributeTrait,
        RefundJsonResponseHandlerAttributeTrait,
        ThreeDSJsonResponseHandlerAttributeTrait,
        ApprovalJsonResponseHandlerAttributeTrait,
        RrnJsonResponseHandlerAttributeTrait,
        SystemJsonResponseHandlerAttributeTrait,
        IssuerJsonResponseHandlerAttributeTrait,
        BillerJsonResponseHandlerAttributeTrait,
        CurrencyJsonResponseHandlerAttributeTrait,
        OffsetJsonResponseHandlerAttributeTrait,
        FeeJsonResponseHandlerAttributeTrait,
        AmountJsonResponseHandlerAttributeTrait,
        ExpiryJsonResponseHandlerAttributeTrait,
        PanJsonResponseHandlerAttributeTrait,
        TokenJsonResponseHandlerAttributeTrait,
        TypeJsonResponseHandlerAttributeTrait,
        MethodJsonResponseHandlerAttributeTrait,
        DatetimeJsonResponseHandlerAttributeTrait,
        ReferenceJsonResponseHandlerAttributeTrait;
}