<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait RrnJsonResponseHandlerAttributeTrait
{
    public function getRrn(): string
    {
        return $this->response->rrn;
    }
}