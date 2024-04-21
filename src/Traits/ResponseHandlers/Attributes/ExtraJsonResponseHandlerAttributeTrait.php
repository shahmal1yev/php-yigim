<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait ExtraJsonResponseHandlerAttributeTrait
{
    public function getExtra(): string
    {
        return $this->response->extra;
    }
}