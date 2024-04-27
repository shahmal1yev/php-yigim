<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class CancellationCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "payment cancellation" commands.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Attributers
 */
class CancellationCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        AmountCommandAttributeTrait;
}