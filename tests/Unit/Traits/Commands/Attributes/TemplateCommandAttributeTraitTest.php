<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TemplateCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class TemplateCommandAttributeTraitTest
 *
 * Test cases for the TemplateCommandAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class TemplateCommandAttributeTraitTest extends TestCase
{
    use TemplateCommandAttributeTrait;

    /**
     * Test setting and getting "template" field value.
     *
     * @return void
     */
    public function testSettingAndGettingTemplateField(): void
    {
        $expected = "TPL0001";

        $this->setTemplate($expected);

        $actualFromMethod = $this->getTemplate();
        $actualFromProperty = $this->template;

        $this->assertSame($expected, $actualFromMethod);
        $this->assertSame($expected, $actualFromProperty);
    }
}
