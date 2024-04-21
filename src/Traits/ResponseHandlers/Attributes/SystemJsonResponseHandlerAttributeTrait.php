<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait SystemJsonResponseHandlerAttributeTrait
{
    public function getSystem(): string
    {
        return $this->response->system;
    }
}