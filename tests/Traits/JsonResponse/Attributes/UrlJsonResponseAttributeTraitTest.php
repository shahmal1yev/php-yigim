<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\UrlJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;
use stdClass;

/**
 * Class UrlJsonResponseAttributeTraitTest
 *
 * Test cases for the UrlJsonResponseAttributeTrait class.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class UrlJsonResponseAttributeTraitTest extends TestCase
{
    use UrlJsonResponseAttributeTrait;

    /** @var stdClass $response The JSON response object. */
    private stdClass $response;

    /**
     * Test getting the URL from the JSON response.
     *
     * @return void
     */
    public function testGetUrl(): void
    {
        $this->response = new stdClass();
        $this->response->url = $expected = 'https://example.com/payment/xxx';

        $actual = $this->getUrl();

        $this->assertSame($expected, $actual);
        $this->assertIsString($actual);
    }
}
