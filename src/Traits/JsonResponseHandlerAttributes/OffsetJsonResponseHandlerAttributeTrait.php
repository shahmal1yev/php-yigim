<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait OffsetJsonResponseHandlerAttributeTrait
{
    public function getOffset(): string
    {
        return $this->response->offset;
    }
}