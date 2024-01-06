<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\DirectPaymentCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\BillerCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CscCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CurrencyCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ExpiryCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ExtraCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\PanCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ReferenceCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\TokenCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\TypeCommandAttributeTrait;

class DirectPaymentCommandAttributer implements DirectPaymentCommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        TypeCommandAttributeTrait,
        TokenCommandAttributeTrait,
        PanCommandAttributeTrait,
        ExpiryCommandAttributeTrait,
        CscCommandAttributeTrait,
        AmountCommandAttributeTrait,
        CurrencyCommandAttributeTrait,
        BillerCommandAttributeTrait,
        ExtraCommandAttributeTrait;
}