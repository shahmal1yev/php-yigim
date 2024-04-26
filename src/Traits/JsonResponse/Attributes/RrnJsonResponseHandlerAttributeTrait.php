<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait RrnJsonResponseHandlerAttributeTrait
{
    public function getRrn(): string
    {
        return $this->response->rrn;
    }
}