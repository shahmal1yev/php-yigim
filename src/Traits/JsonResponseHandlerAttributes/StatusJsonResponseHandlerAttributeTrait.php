<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait StatusJsonResponseHandlerAttributeTrait
{
    public function getStatus(): string
    {
        return $this->response->status;
    }
}