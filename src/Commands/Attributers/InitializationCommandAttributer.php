<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\InitializationCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\BillerCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\CallbackCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\CurrencyCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\DescriptionCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\ExtraCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\LanguageCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\ReferenceCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\SaveCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\TemplateCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\TokenCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\TypeCommandAttributeTrait;

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