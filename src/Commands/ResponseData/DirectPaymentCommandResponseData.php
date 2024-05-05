<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\AmountJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ApprovalJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\BillerJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CurrencyJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\DatetimeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\IssuerJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\PanJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ReferenceJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\RrnJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\StatusJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\SystemJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ThreeDSJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\TypeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class DirectPaymentCommandResponseData
 *
 * Response data for the "direct payment" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
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