<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseData\BatchCloseCommandResponseData;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseData\CancellationCommandResponseData;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;

/**
 * Class BatchCloseCommandResponseHandler
 *
 * Handles the response received after a "closing of batch" command and ensures it contains all required fields.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers
 */
class BatchCloseCommandResponseHandler extends ResponseHandlerAbstract
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
     * Get the response data class for the "closing of batch" command.
     *
     * @return ResponseDataContract The response data contract.
     */
    protected function getResponseDataClass(): ResponseDataContract
    {
        return new BatchCloseCommandResponseData;
    }
}