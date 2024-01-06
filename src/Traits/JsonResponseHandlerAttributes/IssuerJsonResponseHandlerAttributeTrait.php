<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait IssuerJsonResponseHandlerAttributeTrait
{
    public function getIssuer(): string
    {
        return $this->response->issuer;
    }
}