<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait StatusJsonResponseHandlerAttributeTrait
{
    public function getStatus(): string
    {
        return $this->response->status;
    }
}