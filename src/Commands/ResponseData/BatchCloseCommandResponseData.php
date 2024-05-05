<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class BatchCloseCommandResponseData
 *
 * Response data for the "closing of batch" command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
 */
readonly class BatchCloseCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}