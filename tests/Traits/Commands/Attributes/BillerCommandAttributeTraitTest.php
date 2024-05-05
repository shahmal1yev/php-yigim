<?php

namespace EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Traits\Commands\Attributes\BillerCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class BillerCommandAttributeTraitTest
 *
 * Test cases for the BillerCommandAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
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
