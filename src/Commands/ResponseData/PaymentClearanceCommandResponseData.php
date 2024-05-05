<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class PaymentClearanceCommandResponseData
 *
 * Response data for the "payment clearance" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
 */
readonly class PaymentClearanceCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}