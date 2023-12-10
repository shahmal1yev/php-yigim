<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait SystemJsonResponseHandlerAttributeTrait
{
    public function getSystem(): string
    {
        return $this->response->system;
    }
}