<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait FeeJsonResponseHandlerAttributeTrait
{
    public function getFee(): string
    {
        return $this->response->fee;
    }
}