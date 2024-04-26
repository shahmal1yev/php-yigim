<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait CurrencyJsonResponseHandlerAttributeTrait
{
    public function getCurrency(): string
    {
        return $this->response->currency;
    }
}