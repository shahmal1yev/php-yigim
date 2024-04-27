<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait SystemJsonResponseAttributeTrait
{
    public function getSystem(): string
    {
        return $this->response->system;
    }
}