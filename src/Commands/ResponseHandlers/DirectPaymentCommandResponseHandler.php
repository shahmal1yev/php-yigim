<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers;

use Shahmal1yev\EasyPay\Yigim\Abstracts\ResponseHandlerAbstract;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseData\DirectPaymentCommandResponseData;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\ResponseDataTrait;

class DirectPaymentCommandResponseHandler extends ResponseHandlerAbstract
{
    use ResponseDataTrait;

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

    protected function getResponseDataClass(): ResponseDataContract
    {
        return new DirectPaymentCommandResponseData;
    }
}