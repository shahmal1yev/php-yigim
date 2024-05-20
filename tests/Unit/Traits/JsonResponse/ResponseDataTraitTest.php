<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\JsonResponse;

use EasyPay\PHP\Yigim\Traits\JsonResponse\ResponseDataTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ResponseDataTraitTest
 *
 * Test cases for the ResponseDataTrait class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse
 */
class ResponseDataTraitTest extends TestCase
{
    use ResponseDataTrait;

    /**
     * Test the handle method of the ResponseDataTrait.
     *
     * @return void
     */
    public function testHandle()
    {
        // Create an empty object for testing
        $expectedObject = (object) [];

        // Expected class is the current class
        $expectedClass = self::class;

        // Call the handle method with the expected object
        $actualClass = $this->handle($expectedObject);

        // Get the response object property
        $actualObject = $this->response;

        // Assert that the actual object matches the expected object
        $this->assertSame($expectedObject, $actualObject);

        // Assert that the actual class matches the expected class
        $this->assertInstanceOf($expectedClass, $actualClass);
    }
}
