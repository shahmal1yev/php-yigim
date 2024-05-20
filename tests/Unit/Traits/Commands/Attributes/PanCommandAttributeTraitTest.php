<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Traits\Commands\Attributes\PanCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class PanCommandAttributeTraitTest
 *
 * This class tests the PanCommandAttributeTrait to ensure that the PAN (Primary Account Number) field can be set and retrieved correctly.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class PanCommandAttributeTraitTest extends TestCase
{
    use PanCommandAttributeTrait;

    /**
     * Test setting and getting "pan" field
     *
     * @return void
     */
    public function testSettingAndGettingPanField(): void
    {
        $expected = "pan string";

        $this->setPan($expected);

        $takenActualPanFromProperty = $this->pan;
        $takenActualPanFromMethod = $this->getPan();

        $this->assertSame($expected, $takenActualPanFromProperty);
        $this->assertSame($expected, $takenActualPanFromMethod);
    }
}
