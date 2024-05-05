<?php

namespace EasyPay\PHP\Yigim\Commands\Attributers;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class PaymentClearanceCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "payment clearance" commands.
 *
 * @package EasyPay\PHP\Yigim\Attributers
 */
class PaymentClearanceCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        AmountCommandAttributeTrait;
}