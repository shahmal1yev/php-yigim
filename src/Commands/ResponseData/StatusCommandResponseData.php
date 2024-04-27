<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\ResponseDataTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\AmountJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\ApprovalJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\BillerJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\CurrencyJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\DatetimeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\ExpiryJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\ExtraJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\IssuerJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\PanJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\ReferenceJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\RrnJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\StatusJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\SystemJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\ThreeDSJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\TokenJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes\TypeJsonResponseHandlerAttributeTrait;

/**
 * Class StatusCommandResponseData
 *
 * Response data for the "status" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseData
 */
readonly class StatusCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        ReferenceJsonResponseHandlerAttributeTrait,
        DatetimeJsonResponseHandlerAttributeTrait,
        TypeJsonResponseHandlerAttributeTrait,
        TokenJsonResponseHandlerAttributeTrait,
        PanJsonResponseHandlerAttributeTrait,
        ExpiryJsonResponseHandlerAttributeTrait,
        AmountJsonResponseHandlerAttributeTrait,
        CurrencyJsonResponseHandlerAttributeTrait,
        BillerJsonResponseHandlerAttributeTrait,
        SystemJsonResponseHandlerAttributeTrait,
        IssuerJsonResponseHandlerAttributeTrait,
        RrnJsonResponseHandlerAttributeTrait,
        ApprovalJsonResponseHandlerAttributeTrait,
        ThreeDSJsonResponseHandlerAttributeTrait,
        StatusJsonResponseHandlerAttributeTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait,
        ExtraJsonResponseHandlerAttributeTrait;
}
