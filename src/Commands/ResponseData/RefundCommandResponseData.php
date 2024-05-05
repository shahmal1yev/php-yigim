<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class RefundCommandResponseData
 *
 * Response data for the "payment refund" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
 */
readonly class RefundCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}