<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait TypeJsonResponseAttributeTrait
{
    public function getType(): string
    {
        return $this->response->type;
    }
}