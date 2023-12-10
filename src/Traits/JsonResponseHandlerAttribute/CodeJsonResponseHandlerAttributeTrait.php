<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait CodeJsonResponseHandlerAttributeTrait
{
    public function getCode(): string
    {
        return $this->response->code;
    }
}