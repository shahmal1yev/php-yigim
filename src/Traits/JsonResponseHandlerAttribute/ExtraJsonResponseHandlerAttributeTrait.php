<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait ExtraJsonResponseHandlerAttributeTrait
{
    public function getExtra(): string
    {
        return $this->response->extra;
    }
}