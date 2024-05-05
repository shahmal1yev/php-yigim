<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\AmountJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ApprovalJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\BillerJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CurrencyJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\DatetimeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ExpiryJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ExtraJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\IssuerJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\PanJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ReferenceJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\RrnJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\StatusJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\SystemJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ThreeDSJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\TokenJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\TypeJsonResponseAttributeTrait;

/**
 * Class StatusCommandResponseData
 *
 * Response data for the "status" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
 */
readonly class StatusCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        ReferenceJsonResponseAttributeTrait,
        DatetimeJsonResponseAttributeTrait,
        TypeJsonResponseAttributeTrait,
        TokenJsonResponseAttributeTrait,
        PanJsonResponseAttributeTrait,
        ExpiryJsonResponseAttributeTrait,
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
        MessageJsonResponseAttributeTrait,
        ExtraJsonResponseAttributeTrait;
}
