<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait SystemJsonResponseHandlerAttributeTrait
{
    public function getSystem(): string
    {
        return $this->response->system;
    }
}