<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseData\StatusCommandResponseData;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;

/**
 * Class StatusCommandResponseHandler
 *
 * Handles the response received after a "status" command and ensures it contains all required fields.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers
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
