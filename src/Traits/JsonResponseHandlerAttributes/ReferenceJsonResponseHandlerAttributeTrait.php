<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait ReferenceJsonResponseHandlerAttributeTrait
{
    public function getReference(): string
    {
        return $this->response->reference;
    }
}