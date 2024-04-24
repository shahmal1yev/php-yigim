<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\BillerCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class BillerCommandAttributeTraitTest
 *
 * Test cases for the BillerCommandAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes
 */
class BillerCommandAttributeTraitTest extends TestCase
{
    use BillerCommandAttributeTrait;

    /**
     * Test setting and getting "biller" field value.
     *
     * @return void
     */
    public function testSetAndGetBillerField(): void
    {
        $expected = "Biller name provided by acquirer";

        $this->setBiller($expected);

        $actualBillerNameFromMethod = $this->getBiller();
        $actualBillerNameFromProperty = $this->biller;

        $this->assertSame($expected, $actualBillerNameFromProperty);
        $this->assertSame($expected, $actualBillerNameFromMethod);
    }
}
