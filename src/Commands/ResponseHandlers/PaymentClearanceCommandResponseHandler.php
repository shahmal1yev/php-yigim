<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseHandlers;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\ResponseData\PaymentClearanceCommandResponseData;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;

/**
 * Class PaymentClearanceCommandResponseHandler
 *
 * Handles the response received after a "payment clearance" command and ensures it contains all required fields.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseHandlers
 */
class PaymentClearanceCommandResponseHandler extends ResponseHandlerAbstract
{
    /**
     * Get required response fields.
     *
     * @return array|string[]
     */
    protected function getResponseFields(): array
    {
        return [
            'code',
            'message'
        ];
    }

    /**
     * Get the response data class for the "status" command.
     *
     * @return ResponseDataContract The response data contract.
     */
    protected function getResponseDataClass(): ResponseDataContract
    {
        return new PaymentClearanceCommandResponseData;
    }
}