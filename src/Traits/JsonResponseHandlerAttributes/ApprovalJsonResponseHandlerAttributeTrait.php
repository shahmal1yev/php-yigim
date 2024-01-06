<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait ApprovalJsonResponseHandlerAttributeTrait
{
    public function getApproval(): string
    {
        return $this->response->approval;
    }
}