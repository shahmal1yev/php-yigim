<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait TokenJsonResponseHandlerAttributeTrait
{
    public function getToken(): string
    {
        return $this->response->token;
    }
}