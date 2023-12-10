<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait StatusJsonResponseHandlerAttributeTrait
{
    public function getStatus(): string
    {
        return $this->response->status;
    }
}