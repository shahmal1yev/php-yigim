<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait MessageJsonResponseHandlerAttributeTrait
{
    public function getMessage(): string
    {
        return $this->response->message;
    }
}