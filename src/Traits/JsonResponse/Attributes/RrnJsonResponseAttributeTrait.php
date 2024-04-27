<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait RrnJsonResponseAttributeTrait
{
    public function getRrn(): string
    {
        return $this->response->rrn;
    }
}