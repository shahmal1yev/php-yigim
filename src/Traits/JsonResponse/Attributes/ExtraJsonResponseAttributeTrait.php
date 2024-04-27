<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait ExtraJsonResponseAttributeTrait
{
    public function getExtra(): string
    {
        return $this->response->extra;
    }
}