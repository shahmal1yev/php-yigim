<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait BillerJsonResponseHandlerAttributeTrait
{
    public function getBiller(): string
    {
        return $this->response->biller;
    }
}