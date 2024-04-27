<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait ReferenceJsonResponseAttributeTrait
{
    public function getReference(): string
    {
        return $this->response->reference;
    }
}