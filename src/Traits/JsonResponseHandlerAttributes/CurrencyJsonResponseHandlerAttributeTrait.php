<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait CurrencyJsonResponseHandlerAttributeTrait
{
    public function getCurrency(): string
    {
        return $this->response->currency;
    }
}