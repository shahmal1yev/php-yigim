<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait CodeJsonResponseHandlerAttributeTrait
{
    public function getCode(): string
    {
        return $this->response->code;
    }
}