<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseHandlers;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\ResponseData\DirectPaymentCommandResponseData;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;

/**
 * Class DirectPaymentCommandResponseHandler
 *
 * Handles the response received after a "direct payment" command and ensures it contains all required fields.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseHandlers
 */
class DirectPaymentCommandResponseHandler extends ResponseHandlerAbstract
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
            'pan',
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
            'message'
        ];
    }

    /**
     * Get the response data class for the "direct payment" command.
     *
     * @return ResponseDataContract The response data contract.
     */
    protected function getResponseDataClass(): ResponseDataContract
    {
        return new DirectPaymentCommandResponseData;
    }
}