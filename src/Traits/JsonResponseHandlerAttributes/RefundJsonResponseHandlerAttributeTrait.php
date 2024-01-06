<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait RefundJsonResponseHandlerAttributeTrait
{
    public function getRefund(): string
    {
        return $this->response->refund;
    }
}