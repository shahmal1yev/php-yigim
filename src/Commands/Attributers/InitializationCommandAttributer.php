<?php

namespace EasyPay\PHP\Yigim\Commands\Attributers;

use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\AmountCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\BillerCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CallbackCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\CurrencyCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\DescriptionCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\LanguageCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\SaveCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TemplateCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TokenCommandAttributeTrait;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TypeCommandAttributeTrait;

/**
 * Class InitializationCommandAttributer
 *
 * Represents an implementation of CommandAttributerContract used for initializing commands.
 *
 * @package EasyPay\PHP\Yigim\Attributers
 */
class InitializationCommandAttributer implements CommandAttributerContract
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
        CallbackCommandAttributeTrait;
}
