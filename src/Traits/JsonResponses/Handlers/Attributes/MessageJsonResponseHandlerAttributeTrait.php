<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes;

trait MessageJsonResponseHandlerAttributeTrait
{
    public function getMessage(): string
    {
        return $this->response->message;
    }
}