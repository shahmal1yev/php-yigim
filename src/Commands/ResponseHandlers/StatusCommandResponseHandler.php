<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseHandlers;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\ResponseData\StatusCommandResponseData;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;

/**
 * Class StatusCommandResponseHandler
 *
 * Handles the response received after a "status" command and ensures it contains all required fields.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseHandlers
 */
class StatusCommandResponseHandler extends ResponseHandlerAbstract
{
    /**
     * Get required response fields.
     *
     * @return array|string[]
     */
    protected function getResponseFields(): array
    {
        return [
            'reference',
            'datetime',
            'type',
            'token',
            'pan',
            'expiry',
            'amount',
            'currency',
            'biller',
            'system',
            'issuer',
            'rrn',
            'approval',
            '3ds',
            'status',
            'code',
            'message',
            'extra'
        ];
    }

    /**
     * Get the response data class for the "status" command.
     *
     * @return ResponseDataContract The response data contract.
     */
    protected function getResponseDataClass(): ResponseDataContract
    {
        return new StatusCommandResponseData;
    }
}
