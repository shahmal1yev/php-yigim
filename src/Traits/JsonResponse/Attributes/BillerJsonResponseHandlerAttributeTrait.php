<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait BillerJsonResponseHandlerAttributeTrait
{
    public function getBiller(): string
    {
        return $this->response->biller;
    }
}