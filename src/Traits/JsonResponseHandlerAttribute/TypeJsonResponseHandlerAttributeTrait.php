<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait TypeJsonResponseHandlerAttributeTrait
{
    public function getType(): string
    {
        return $this->response->type;
    }
}