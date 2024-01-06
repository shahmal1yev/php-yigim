<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait MessageJsonResponseHandlerAttributeTrait
{
    public function getMessage(): string
    {
        return $this->response->message;
    }
}