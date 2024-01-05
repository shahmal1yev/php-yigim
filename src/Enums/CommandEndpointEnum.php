<?php

namespace Shahmal1yev\EasyPay\Yigim\Enums;

enum CommandEndpointEnum: string
{
    case INITIALIZATION = "https://sandbox.api.pay.yigim.az/payment/create";
    case STATUS         = "https://sandbox.api.pay.yigim.az/payment/status";
    case DIRECT_PAYMENT = "https://sandbox.api.pay.yigim.az/payment/execute";
    case CLEARANCE      = "https://sandbox.api.pay.yigim.az/payment/charge";
    case CANCELLATION   = "https://sandbox.api.pay.yigim.az/payment/cancel";
    case REFUND         = "https://sandbox.api.pay.yigim.az/payment/refund";
}