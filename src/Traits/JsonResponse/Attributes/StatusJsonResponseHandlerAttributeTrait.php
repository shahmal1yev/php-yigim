<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait StatusJsonResponseHandlerAttributeTrait
{
    public function getStatus(): string
    {
        return $this->response->status;
    }
}