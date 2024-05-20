<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Traits\Commands\Attributes\ReferenceCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ReferenceCommandAttributeTraitTest
 *
 * Test cases for the ReferenceCommandAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
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
