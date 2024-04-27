<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;

/**
 * Class PaymentClearanceCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for "payment clearance" commands.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Attributers
 */
class PaymentClearanceCommandAttributer implements CommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        AmountCommandAttributeTrait;
}