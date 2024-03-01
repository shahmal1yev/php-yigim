<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait ThreeDSJsonResponseHandlerAttributeTrait
{
    public function get3ds(): string
    {
        return $this->response->_3ds;
    }
}