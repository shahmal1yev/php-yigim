<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait ThreeDSJsonResponseAttributeTrait
{
    public function get3ds(): string
    {
        return $this->response->_3ds;
    }
}