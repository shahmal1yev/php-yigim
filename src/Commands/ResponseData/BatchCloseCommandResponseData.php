<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class BatchCloseCommandResponseData
 *
 * Response data for the "closing of batch" command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseData
 */
readonly class BatchCloseCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}