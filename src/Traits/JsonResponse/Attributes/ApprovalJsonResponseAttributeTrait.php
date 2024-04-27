<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait ApprovalJsonResponseAttributeTrait
{
    public function getApproval(): string
    {
        return $this->response->approval;
    }
}