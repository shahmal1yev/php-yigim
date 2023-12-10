<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait BillerJsonResponseHandlerAttributeTrait
{
    public function getBiller(): string
    {
        return $this->response->biller;
    }
}