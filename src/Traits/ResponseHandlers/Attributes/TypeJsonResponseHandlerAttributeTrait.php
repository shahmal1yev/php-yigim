<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait TypeJsonResponseHandlerAttributeTrait
{
    public function getType(): string
    {
        return $this->response->type;
    }
}