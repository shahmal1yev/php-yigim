<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait RefundJsonResponseHandlerAttributeTrait
{
    public function getRefund(): string
    {
        return $this->response->refund;
    }
}