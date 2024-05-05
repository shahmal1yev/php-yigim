<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseHandlers;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\ResponseData\InitializationCommandResponseData;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;

/**
 * Class InitializationCommandResponseHandler
 *
 * Handles the response received after an initialization command and ensures it contains all required fields.
 *
 * @package EasyPay\PHP\Yigim\ResponseHandlers
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
