<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes;

trait CodeJsonResponseHandlerAttributeTrait
{
    public function getCode(): string
    {
        return $this->response->code;
    }
}