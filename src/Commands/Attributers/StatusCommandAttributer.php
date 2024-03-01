<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\StatusCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ReferenceCommandAttributeTrait;

class StatusCommandAttributer implements StatusCommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}