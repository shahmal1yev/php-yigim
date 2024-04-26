<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait ThreeDSJsonResponseHandlerAttributeTrait
{
    public function get3ds(): string
    {
        return $this->response->_3ds;
    }
}