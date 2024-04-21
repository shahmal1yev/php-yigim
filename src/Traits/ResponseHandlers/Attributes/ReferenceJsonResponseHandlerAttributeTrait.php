<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait ReferenceJsonResponseHandlerAttributeTrait
{
    public function getReference(): string
    {
        return $this->response->reference;
    }
}