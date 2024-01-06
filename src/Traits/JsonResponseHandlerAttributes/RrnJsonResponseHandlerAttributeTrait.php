<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait RrnJsonResponseHandlerAttributeTrait
{
    public function getRrn(): string
    {
        return $this->response->rrn;
    }
}