<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait OffsetJsonResponseHandlerAttributeTrait
{
    public function getOffset(): string
    {
        return $this->response->offset;
    }
}