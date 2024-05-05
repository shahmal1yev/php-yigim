<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseData;

use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\UrlJsonResponseAttributeTrait;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class InitializationCommandResponseData
 *
 * Response data for the initialization command.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseData
 */
readonly class InitializationCommandResponseData implements ResponseDataContract
{
    use ResponseDataTrait,
        UrlJsonResponseAttributeTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;
}
