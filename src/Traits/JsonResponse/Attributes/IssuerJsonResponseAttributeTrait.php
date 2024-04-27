<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait IssuerJsonResponseAttributeTrait
{
    public function getIssuer(): string
    {
        return $this->response->issuer;
    }
}