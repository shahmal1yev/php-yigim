<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute;

interface StatusJsonResponseHandlerAttributeContract
{
    public function getStatus(): string;
}