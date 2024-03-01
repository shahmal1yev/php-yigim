<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait RrnJsonResponseHandlerAttributeTrait
{
    public function getRrn(): string
    {
        return $this->response->rrn;
    }
}