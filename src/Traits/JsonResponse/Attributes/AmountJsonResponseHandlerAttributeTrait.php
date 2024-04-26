<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait AmountJsonResponseHandlerAttributeTrait
{
    public function getAmount(): int
    {
        return $this->response->amount;
    }
}