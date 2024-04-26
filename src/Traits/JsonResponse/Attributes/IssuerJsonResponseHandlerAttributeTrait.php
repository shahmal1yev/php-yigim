<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait IssuerJsonResponseHandlerAttributeTrait
{
    public function getIssuer(): string
    {
        return $this->response->issuer;
    }
}