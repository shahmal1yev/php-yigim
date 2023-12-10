<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait TokenJsonResponseHandlerAttributeTrait
{
    public function getToken(): string
    {
        return $this->response->token;
    }
}