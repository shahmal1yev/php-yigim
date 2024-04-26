<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait SystemJsonResponseHandlerAttributeTrait
{
    public function getSystem(): string
    {
        return $this->response->system;
    }
}