<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttribute;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\InitializationCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\BillerCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CallbackCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CurrencyCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\DescriptionCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ExtraCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\LanguageCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\SaveCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\TemplateCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\TokenCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\TypeCommandAttributeTrait;

class InitializationCommandAttribute implements InitializationCommandAttributeContract
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