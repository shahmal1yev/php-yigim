<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes;

use Shahmal1yev\EasyPay\Yigim\Exceptions\InvalidTokenException;
use Shahmal1yev\EasyPay\Yigim\Traits\Commands\Attributes\TokenCommandAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class TokenCommandAttributeTrait
 *
 * Test cases for the TokenCommandAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\Commands\Attributes
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
