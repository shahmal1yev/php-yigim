<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait TypeJsonResponseHandlerAttributeTrait
{
    public function getType(): string
    {
        return $this->response->type;
    }
}