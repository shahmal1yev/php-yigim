<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\AmountJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\ApprovalJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\BillerJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\CurrencyJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\DatetimeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\ExpiryJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\ExtraJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\FeeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\IssuerJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\MessageJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\MethodJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\OffsetJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\PanJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\ReferenceJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\RefundJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\RrnJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\StatusJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\SystemJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\ThreeDSJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\TokenJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes\TypeJsonResponseHandlerAttributeContract;

interface StatusJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, ExtraJsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, StatusJsonResponseHandlerAttributeContract, RefundJsonResponseHandlerAttributeContract, ThreeDSJsonResponseHandlerAttributeContract, ApprovalJsonResponseHandlerAttributeContract, RrnJsonResponseHandlerAttributeContract, SystemJsonResponseHandlerAttributeContract, IssuerJsonResponseHandlerAttributeContract, BillerJsonResponseHandlerAttributeContract, CurrencyJsonResponseHandlerAttributeContract, OffsetJsonResponseHandlerAttributeContract, FeeJsonResponseHandlerAttributeContract, AmountJsonResponseHandlerAttributeContract, ExpiryJsonResponseHandlerAttributeContract, PanJsonResponseHandlerAttributeContract, TokenJsonResponseHandlerAttributeContract, TypeJsonResponseHandlerAttributeContract, MethodJsonResponseHandlerAttributeContract, DatetimeJsonResponseHandlerAttributeContract, ReferenceJsonResponseHandlerAttributeContract
{
    public const array REQUIRED_FIELDS = [
        'reference',
        'datetime',
        'method',
        'type',
        'token',
        'pan',
        'expiry',
        'amount',
        'fee',
        'offset',
        'currency',
        'biller',
        'system',
        'issuer',
        'rrn',
        'approval',
        '3ds',
        'refund',
        'status',
        'code',
        'message',
        'extra',
    ];
}