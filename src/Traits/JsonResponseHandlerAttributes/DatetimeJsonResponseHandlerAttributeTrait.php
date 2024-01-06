<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait DatetimeJsonResponseHandlerAttributeTrait
{
    public function getDatetime(): string
    {
        return $this->response->datetime;
    }
}