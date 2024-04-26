<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseData;

use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes\UrlJsonResponseHandlerAttributeTrait;

/**
 * Class InitializationCommandResponseData
 *
 * Response data for the initialization command.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseData
 */
readonly class InitializationCommandResponseData implements ResponseDataContract
{
    use UrlJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait;

    /**
     * InitializationCommandResponseData constructor.
     *
     * @param object $response The response object.
     */
    public function __construct(private object $response)
    {
    }
}
