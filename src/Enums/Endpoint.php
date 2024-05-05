<?php

namespace EasyPay\PHP\Yigim\Enums;

/**
 * Enum class representing the endpoints for various operations in the Yigim payment system.
 *
 * @package EasyPay\PHP\Yigim\Enums
 */
enum Endpoint: string
{
    /**
     * The endpoint for initializing a payment.
     */
    case INITIALIZATION = "https://sandbox.api.pay.yigim.az/payment/create";

    /**
     * The endpoint for checking the status of a payment.
     */
    case STATUS = "https://sandbox.api.pay.yigim.az/payment/status";

    /**
     * The endpoint for executing a direct payment.
     */
    case DIRECT_PAYMENT = "https://sandbox.api.pay.yigim.az/payment/execute";

    /**
     * The endpoint for clearing a payment.
     */
    case CLEARANCE = "https://sandbox.api.pay.yigim.az/payment/charge";

    /**
     * The endpoint for canceling a payment.
     */
    case CANCELLATION = "https://sandbox.api.pay.yigim.az/payment/cancel";

    /**
     * The endpoint for refunding a payment.
     */
    case REFUND = "https://sandbox.api.pay.yigim.az/payment/refund";

    /**
     * The endpoint for batch closure.
     */
    case BATCH_CLOSE = "https://sandbox.api.pay.yigim.az/merchant/batch/close";
}
