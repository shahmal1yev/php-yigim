<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\StatusCommandContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class StatusCommand implements StatusCommandContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}