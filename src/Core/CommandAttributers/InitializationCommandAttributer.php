<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\InitializationCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\BillerCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CallbackCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CurrencyCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\DescriptionCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ExtraCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\LanguageCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ReferenceCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\SaveCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\TemplateCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\TokenCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\TypeCommandAttributeTrait;

class InitializationCommandAttributer implements InitializationCommandAttributerContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        TypeCommandAttributeTrait,
        TokenCommandAttributeTrait,
        SaveCommandAttributeTrait,
        AmountCommandAttributeTrait,
        CurrencyCommandAttributeTrait,
        BillerCommandAttributeTrait,
        DescriptionCommandAttributeTrait,
        TemplateCommandAttributeTrait,
        LanguageCommandAttributeTrait,
        CallbackCommandAttributeTrait,
        ExtraCommandAttributeTrait;
}