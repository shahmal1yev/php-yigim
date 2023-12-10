<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait IssuerJsonResponseHandlerAttributeTrait
{
    public function getIssuer(): string
    {
        return $this->response->issuer;
    }
}