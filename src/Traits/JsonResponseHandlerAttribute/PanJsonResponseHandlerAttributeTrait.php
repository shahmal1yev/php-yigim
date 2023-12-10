<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait PanJsonResponseHandlerAttributeTrait
{
    public function getPan(): string
    {
        return $this->response->pan;
    }
}