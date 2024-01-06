<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\AmountJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\ApprovalJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\BillerJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\CurrencyJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\DatetimeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\ExpiryJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\FeeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\IssuerJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\MessageJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\MethodJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\PanJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\ReferenceJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\RrnJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\StatusJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\SystemJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\ThreeDSJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\TokenJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttributes\TypeJsonResponseHandlerAttributeContract;

interface DirectPaymentJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, StatusJsonResponseHandlerAttributeContract, ThreeDSJsonResponseHandlerAttributeContract, ApprovalJsonResponseHandlerAttributeContract, RrnJsonResponseHandlerAttributeContract, SystemJsonResponseHandlerAttributeContract, IssuerJsonResponseHandlerAttributeContract, BillerJsonResponseHandlerAttributeContract, CurrencyJsonResponseHandlerAttributeContract, FeeJsonResponseHandlerAttributeContract, AmountJsonResponseHandlerAttributeContract, ExpiryJsonResponseHandlerAttributeContract, PanJsonResponseHandlerAttributeContract, TokenJsonResponseHandlerAttributeContract, TypeJsonResponseHandlerAttributeContract, MethodJsonResponseHandlerAttributeContract, DatetimeJsonResponseHandlerAttributeContract, ReferenceJsonResponseHandlerAttributeContract
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
        'currency',
        'biller',
        'system',
        'issuer',
        'rrn',
        'approval',
        '3ds',
        'status',
        'code',
        'message',
    ];
}