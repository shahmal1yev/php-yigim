<?php

namespace Shahmal1yev\EasyPay\Yigim\Enums;

enum Endpoint: string
{
    case INITIALIZATION = "https://sandbox.api.pay.yigim.az/payment/create";
    case STATUS         = "https://sandbox.api.pay.yigim.az/payment/status";
    case DIRECT_PAYMENT = "https://sandbox.api.pay.yigim.az/payment/execute";
    case CLEARANCE      = "https://sandbox.api.pay.yigim.az/payment/charge";
    case CANCELLATION   = "https://sandbox.api.pay.yigim.az/payment/cancel";
    case REFUND         = "https://sandbox.api.pay.yigim.az/payment/refund";
    case INITIALIZATION_TEST = "http://localhost:3000/payments/initialization";
    case STATUS_TEST = "http://localhost:3000/payments/status";
    case DIRECT_PAYMENT_TEST = "http://localhost:3000/payments/direct_payment";
    case CLEARANCE_TEST = "http://localhost:3000/payments/clearance";
    case CANCELLATION_TEST = "http://localhost:3000/payments/cancellation";
    case REFUND_TEST = "http://localhost/payments/refund";
}