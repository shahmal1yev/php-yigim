<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\BillerCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CscCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CurrencyCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\ExpiryCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\PanCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\TokenCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\TypeCommandAttributeTrait;

/**
 * Class DirectPaymentCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "direct payment" commands.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Attributers
 */
class DirectPaymentCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        TypeCommandAttributeTrait,
        TokenCommandAttributeTrait,
        PanCommandAttributeTrait,
        ExpiryCommandAttributeTrait,
        CscCommandAttributeTrait,
        AmountCommandAttributeTrait,
        CurrencyCommandAttributeTrait,
        BillerCommandAttributeTrait,
        ExpiryCommandAttributeTrait;
}