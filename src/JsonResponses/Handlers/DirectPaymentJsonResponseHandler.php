<?php

namespace Shahmal1yev\EasyPay\Yigim\JsonResponseHandlers\Handlers;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\DirectPaymentJsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\AmountJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\ApprovalJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\BillerJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\CurrencyJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\DatetimeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\ExpiryJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\FeeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\IssuerJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\JsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\MethodJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\PanJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\ReferenceJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\RrnJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\StatusJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\SystemJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\ThreeDSJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\TokenJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\TypeJsonResponseHandlerAttributeTrait;

class DirectPaymentJsonResponseHandler implements JsonResponseHandlerContract, DirectPaymentJsonResponseHandlerContract
{
    use JsonResponseHandlerAttributeTrait,
        MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        StatusJsonResponseHandlerAttributeTrait,
        ThreeDSJsonResponseHandlerAttributeTrait,
        ApprovalJsonResponseHandlerAttributeTrait,
        RrnJsonResponseHandlerAttributeTrait,
        SystemJsonResponseHandlerAttributeTrait,
        IssuerJsonResponseHandlerAttributeTrait,
        BillerJsonResponseHandlerAttributeTrait,
        CurrencyJsonResponseHandlerAttributeTrait,
        FeeJsonResponseHandlerAttributeTrait,
        AmountJsonResponseHandlerAttributeTrait,
        ExpiryJsonResponseHandlerAttributeTrait,
        PanJsonResponseHandlerAttributeTrait,
        TokenJsonResponseHandlerAttributeTrait,
        TypeJsonResponseHandlerAttributeTrait,
        MethodJsonResponseHandlerAttributeTrait,
        DatetimeJsonResponseHandlerAttributeTrait,
        ReferenceJsonResponseHandlerAttributeTrait;

    private readonly \stdClass $response;

    public function __construct(private readonly string $json)
    {
        $this->construct();
    }
}