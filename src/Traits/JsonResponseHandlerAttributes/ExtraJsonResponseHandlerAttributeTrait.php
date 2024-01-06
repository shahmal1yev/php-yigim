<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait ExtraJsonResponseHandlerAttributeTrait
{
    public function getExtra(): string
    {
        return $this->response->extra;
    }
}