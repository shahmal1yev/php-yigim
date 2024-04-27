<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes;

use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes\ApprovalJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ApprovalJsonResponseAttributeTraitTest
 *
 * Test case for the ApprovalJsonResponseAttributeTrait trait.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Tests\Traits\JsonResponse\Attributes
 */
class ApprovalJsonResponseAttributeTraitTest extends TestCase
{
    use ApprovalJsonResponseAttributeTrait;

    /** @var object */
    private object $response;

    protected function setUp(): void
    {
        $this->response = (object) ['approval' => 'value'];
    }

    /**
     * Test the getApproval method.
     */
    public function testGetApproval(): void
    {
        $expected = $this->response->approval;
        $actual = $this->getApproval();

        $this->assertSame($expected, $actual);
    }
}
