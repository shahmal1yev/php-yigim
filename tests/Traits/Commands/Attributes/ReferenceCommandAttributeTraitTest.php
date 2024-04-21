<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ReferenceCommandAttributeTraitTest
 *
 * Test cases for the ReferenceCommandAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes
 */
class ReferenceCommandAttributeTraitTest extends TestCase
{
    use ReferenceCommandAttributeTrait;

    /**
     * Test setting and getting reference.
     *
     * @return void
     */
    public function testSettingAndGettingReference(): void
    {
        $expected = "xMerchant value";

        $this->setReference($expected);

        $takenActualReferenceFromMethod = $this->getReference();
        $takenActualReferenceFromProperty = $this->reference;

        $this->assertSame($expected, $takenActualReferenceFromMethod);
        $this->assertSame($expected, $takenActualReferenceFromProperty);
    }

    /**
     * Test getting reference without setting.
     *
     * @return void
     */
    public function testGettingReferenceWithoutSetting(): void
    {
        $this->expectException(\Error::class);

        $this->getReference();
    }
}
