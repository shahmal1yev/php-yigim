<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait StatusJsonResponseAttributeTrait
{
    public function getStatus(): string
    {
        return $this->response->status;
    }
}