<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait PanJsonResponseHandlerAttributeTrait
{
    public function getPan(): string
    {
        return $this->response->pan;
    }
}