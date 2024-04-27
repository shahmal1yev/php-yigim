<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait PanJsonResponseAttributeTrait
{
    public function getPan(): string
    {
        return $this->response->pan;
    }
}