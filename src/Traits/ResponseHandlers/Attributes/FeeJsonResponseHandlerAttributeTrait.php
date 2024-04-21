<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait FeeJsonResponseHandlerAttributeTrait
{
    public function getFee(): string
    {
        return $this->response->fee;
    }
}