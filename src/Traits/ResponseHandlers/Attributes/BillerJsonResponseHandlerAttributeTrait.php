<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait BillerJsonResponseHandlerAttributeTrait
{
    public function getBiller(): string
    {
        return $this->response->biller;
    }
}