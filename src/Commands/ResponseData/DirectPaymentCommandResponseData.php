<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\AmountJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ApprovalJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\BillerJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CurrencyJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\DatetimeJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\IssuerJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\PanJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ReferenceJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\RrnJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\StatusJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\SystemJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ThreeDSJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\TypeJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class DirectPaymentCommandResponseData
 *
 * Response data for the "direct payment" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseData
 */
readonly class DirectPaymentCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        ReferenceJsonResponseAttributeTrait,
        DatetimeJsonResponseAttributeTrait,
        TypeJsonResponseAttributeTrait,
        PanJsonResponseAttributeTrait,
        AmountJsonResponseAttributeTrait,
        CurrencyJsonResponseAttributeTrait,
        BillerJsonResponseAttributeTrait,
        SystemJsonResponseAttributeTrait,
        IssuerJsonResponseAttributeTrait,
        RrnJsonResponseAttributeTrait,
        ApprovalJsonResponseAttributeTrait,
        ThreeDSJsonResponseAttributeTrait,
        StatusJsonResponseAttributeTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}