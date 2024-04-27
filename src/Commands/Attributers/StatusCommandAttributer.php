<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class StatusCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "status" commands.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Attributers
 */
class StatusCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}