<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait FeeJsonResponseHandlerAttributeTrait
{
    public function getFee(): string
    {
        return $this->response->fee;
    }
}