<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait BillerJsonResponseAttributeTrait
{
    public function getBiller(): string
    {
        return $this->response->biller;
    }
}