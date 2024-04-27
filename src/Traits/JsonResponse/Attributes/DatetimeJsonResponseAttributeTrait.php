<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait DatetimeJsonResponseAttributeTrait
{
    public function getDatetime(): string
    {
        return $this->response->datetime;
    }
}