<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait DatetimeJsonResponseHandlerAttributeTrait
{
    public function getDatetime(): string
    {
        return $this->response->datetime;
    }
}