<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\ReferenceCommandAttributeContract;

interface ClearanceCommandContract extends CommandAttributeContract, ReferenceCommandAttributeContract, AmountCommandAttributeContract
{

}