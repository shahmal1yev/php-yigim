<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\AmountJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\ApprovalJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\BillerJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\CurrencyJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\DatetimeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\ExpiryJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\ExtraJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\FeeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\IssuerJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\MethodJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\OffsetJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\PanJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\ReferenceJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\RefundJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\RrnJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\StatusJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\SystemJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\ThreeDSJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\TokenJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\TypeJsonResponseHandlerAttributeContract;

interface StatusJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, ExtraJsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, StatusJsonResponseHandlerAttributeContract, RefundJsonResponseHandlerAttributeContract, ThreeDSJsonResponseHandlerAttributeContract, ApprovalJsonResponseHandlerAttributeContract, RrnJsonResponseHandlerAttributeContract, SystemJsonResponseHandlerAttributeContract, IssuerJsonResponseHandlerAttributeContract, BillerJsonResponseHandlerAttributeContract, CurrencyJsonResponseHandlerAttributeContract, OffsetJsonResponseHandlerAttributeContract, FeeJsonResponseHandlerAttributeContract, AmountJsonResponseHandlerAttributeContract, ExpiryJsonResponseHandlerAttributeContract, PanJsonResponseHandlerAttributeContract, TokenJsonResponseHandlerAttributeContract, TypeJsonResponseHandlerAttributeContract, MethodJsonResponseHandlerAttributeContract, DatetimeJsonResponseHandlerAttributeContract, ReferenceJsonResponseHandlerAttributeContract
{

}