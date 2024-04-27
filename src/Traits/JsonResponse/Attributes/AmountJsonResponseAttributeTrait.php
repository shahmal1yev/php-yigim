<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait AmountJsonResponseAttributeTrait
{
    public function getAmount(): int
    {
        return $this->response->amount;
    }
}