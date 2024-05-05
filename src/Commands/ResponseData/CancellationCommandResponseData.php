<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class CancellationCommandResponseData
 *
 * Response data for the "payment cancellation" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
 */
readonly class CancellationCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}