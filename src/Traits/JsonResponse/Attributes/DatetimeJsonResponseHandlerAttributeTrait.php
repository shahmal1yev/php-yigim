<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait DatetimeJsonResponseHandlerAttributeTrait
{
    public function getDatetime(): string
    {
        return $this->response->datetime;
    }
}