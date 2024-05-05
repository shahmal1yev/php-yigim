<?php

namespace EasyPay\PHP\Yigim\Commands\Attributers;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class StatusCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "status" commands.
 *
 * @package EasyPay\PHP\Yigim\Attributers
 */
class StatusCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}