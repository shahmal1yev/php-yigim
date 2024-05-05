<?php

namespace EasyPay\PHP\Yigim\Commands\ResponseHandlers;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Commands\ResponseData\CancellationCommandResponseData;
use EasyPay\PHP\Yigim\Commands\ResponseData\RefundCommandResponseData;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;

/**
 * Class RefundCommandResponseHandler
 *
 * Handles the response received after a "payment refund" command and ensures it contains all required fields.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseHandlers
 */
class RefundCommandResponseHandler extends ResponseHandlerAbstract
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
     * Get the response data class for the "payment refund" command.
     *
     * @return ResponseDataContract The response data contract.
     */
    protected function getResponseDataClass(): ResponseDataContract
    {
        return new RefundCommandResponseData();
    }
}