<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait CurrencyJsonResponseHandlerAttributeTrait
{
    public function getCurrency(): string
    {
        return $this->response->currency;
    }
}