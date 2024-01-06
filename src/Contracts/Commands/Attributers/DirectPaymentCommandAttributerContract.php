<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\BillerCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CscCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CurrencyCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ExpiryCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ExtraCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\PanCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\TokenCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\TypeCommandAttributeContract;

interface DirectPaymentCommandAttributerContract extends
    CommandAttributerContract,
    CommandAttributeContract,
    TypeCommandAttributeContract,
    BillerCommandAttributeContract,
    AmountCommandAttributeContract,
    ExpiryCommandAttributeContract,
    TokenCommandAttributeContract,
    PanCommandAttributeContract,
    CscCommandAttributeContract,
    CurrencyCommandAttributeContract,
    ExtraCommandAttributeContract,
    ReferenceCommandAttributeContract
{

}