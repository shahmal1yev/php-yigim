<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait ReferenceJsonResponseHandlerAttributeTrait
{
    public function getReference(): string
    {
        return $this->response->reference;
    }
}