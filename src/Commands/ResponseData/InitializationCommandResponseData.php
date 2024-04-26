<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\CodeJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\MessageJsonResponseAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\UrlJsonResponseAttributeTrait;

/**
 * Class InitializationCommandResponseData
 *
 * Response data for the initialization command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseData
 */
readonly class InitializationCommandResponseData implements ResponseDataContract
{
    use UrlJsonResponseAttributeTrait,
        CodeJsonResponseAttributeTrait,
        MessageJsonResponseAttributeTrait;

    /**
     * InitializationCommandResponseData constructor.
     *
     * @param object $response The response object.
     */
    public function __construct(private object $response)
    {
    }
}
