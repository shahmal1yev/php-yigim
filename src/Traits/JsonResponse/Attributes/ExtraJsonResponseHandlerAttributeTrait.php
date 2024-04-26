<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait ExtraJsonResponseHandlerAttributeTrait
{
    public function getExtra(): string
    {
        return $this->response->extra;
    }
}