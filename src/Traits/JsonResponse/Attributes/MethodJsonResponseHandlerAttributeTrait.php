<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait MethodJsonResponseHandlerAttributeTrait
{
    public function getMethod(): string
    {
        return $this->response->method;
    }
}