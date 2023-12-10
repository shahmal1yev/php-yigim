<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait AmountJsonResponseHandlerAttributeTrait
{
    public function getAmount(): int
    {
        return $this->response->amount;
    }
}