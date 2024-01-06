<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait AmountJsonResponseHandlerAttributeTrait
{
    public function getAmount(): int
    {
        return $this->response->amount;
    }
}