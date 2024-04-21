<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait CodeJsonResponseHandlerAttributeTrait
{
    public function getCode(): string
    {
        return $this->response->code;
    }
}