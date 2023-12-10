<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait MethodJsonResponseHandlerAttributeTrait
{
    public function getMethod(): string
    {
        return $this->response->method;
    }
}