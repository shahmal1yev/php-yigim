<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait AmountJsonResponseHandlerAttributeTrait
{
    public function getAmount(): int
    {
        return $this->response->amount;
    }
}