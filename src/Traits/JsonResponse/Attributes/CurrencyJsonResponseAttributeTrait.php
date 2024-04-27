<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait CurrencyJsonResponseAttributeTrait
{
    public function getCurrency(): string
    {
        return $this->response->currency;
    }
}