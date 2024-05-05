<?php

namespace EasyPay\PHP\Yigim\Commands\Attributers;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class RefundCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "payment refund" commands.
 *
 * @package EasyPay\PHP\Yigim\Attributers
 */
class RefundCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        AmountCommandAttributeTrait;
}