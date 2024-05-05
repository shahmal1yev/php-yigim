<?php

namespace EasyPay\PHP\Yigim\Commands\Attributers;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\BillerCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CscCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CurrencyCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ExpiryCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\PanCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TokenCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TypeCommandAttributeTrait;

/**
 * Class DirectPaymentCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "direct payment" commands.
 *
 * @package EasyPay\PHP\Yigim\Attributers
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