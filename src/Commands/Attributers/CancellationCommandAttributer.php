<?php

namespace EasyPay\PHP\Yigim\Commands\Attributers;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class CancellationCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "payment cancellation" commands.
 *
 * @package EasyPay\PHP\Yigim\Attributers
 */
class CancellationCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        AmountCommandAttributeTrait;
}