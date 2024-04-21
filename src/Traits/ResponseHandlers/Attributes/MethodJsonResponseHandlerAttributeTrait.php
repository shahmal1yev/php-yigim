<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait MethodJsonResponseHandlerAttributeTrait
{
    public function getMethod(): string
    {
        return $this->response->method;
    }
}