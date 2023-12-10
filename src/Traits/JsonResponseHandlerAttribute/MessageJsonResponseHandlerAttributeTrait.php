<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait MessageJsonResponseHandlerAttributeTrait
{
    public function getMessage(): string
    {
        return $this->response->message;
    }
}