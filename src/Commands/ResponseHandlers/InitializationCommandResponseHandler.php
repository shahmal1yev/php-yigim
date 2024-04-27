<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseData\InitializationCommandResponseData;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;

/**
 * Class InitializationCommandResponseHandler
 *
 * Handles the response received after an initialization command and ensures it contains all required fields.
 *
 * @package Shahmal1yev\EasyPay\Yigim\ResponseHandlers
 */
class InitializationCommandResponseHandler extends ResponseHandlerAbstract
{
    /**
     * Get required response fields.
     *
     * @return array|string[]
     */
    protected function getResponseFields(): array
    {
        return [
            'url',
            'code',
            'message'
        ];
    }

    /**
     * Get the response data class.
     *
     * @return ResponseDataContract The response data contract.
     */
    protected function getResponseDataClass(): ResponseDataContract
    {
        return new InitializationCommandResponseData;
    }
}
