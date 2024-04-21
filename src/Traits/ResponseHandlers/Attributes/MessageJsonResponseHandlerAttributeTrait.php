<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\ResponseHandlers\Attributes;

trait MessageJsonResponseHandlerAttributeTrait
{
    public function getMessage(): string
    {
        return $this->response->message;
    }
}