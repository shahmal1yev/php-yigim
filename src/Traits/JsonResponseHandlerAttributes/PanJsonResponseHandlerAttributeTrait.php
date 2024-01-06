<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait PanJsonResponseHandlerAttributeTrait
{
    public function getPan(): string
    {
        return $this->response->pan;
    }
}