<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait RefundJsonResponseHandlerAttributeTrait
{
    public function getRefund(): string
    {
        return $this->response->refund;
    }
}