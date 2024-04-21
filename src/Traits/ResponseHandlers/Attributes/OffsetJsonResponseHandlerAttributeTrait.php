<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait OffsetJsonResponseHandlerAttributeTrait
{
    public function getOffset(): string
    {
        return $this->response->offset;
    }
}