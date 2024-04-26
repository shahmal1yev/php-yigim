<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait OffsetJsonResponseHandlerAttributeTrait
{
    public function getOffset(): string
    {
        return $this->response->offset;
    }
}