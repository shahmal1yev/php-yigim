<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\Commands\Attributes;

use EasyPay\PHP\Yigim\Exceptions\InvalidTokenException;
use EasyPay\PHP\Yigim\Traits\Commands\Attributes\TokenCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class TokenCommandAttributeTrait
 *
 * Test cases for the TokenCommandAttributeTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\Commands\Attributes
 */
class TokenCommandAttributeTraitTest extends TestCase
{
    use TokenCommandAttributeTrait;

    /**
     * Test setting token field with valid argument.
     *
     * @return void
     * @throws InvalidTokenException
     */
    public function testSetTokenWithValidArgument()
    {
        $excepted = "a string";

        $this->setToken($excepted);

        $takenActualTokenFromMethod = $this->getToken();
        $takenActualTokenFromProperty = $this->token;

        $this->assertSame($excepted, $takenActualTokenFromMethod);
        $this->assertSame($excepted, $takenActualTokenFromProperty);
    }

    /**
     * Test setting token with invalid argument.
     *
     * @return void
     * @throws InvalidTokenException
     */
    public function testSetTokenWithInvalidArgument()
    {
        $this->expectException(InvalidTokenException::class);

        $this->setToken('');
    }
}
