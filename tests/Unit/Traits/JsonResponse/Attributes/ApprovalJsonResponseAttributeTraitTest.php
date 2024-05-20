<?php

namespace EasyPay\PHP\Yigim\Tests\Unit\Traits\JsonResponse\Attributes;

use EasyPay\PHP\Yigim\Traits\JsonResponse\Attributes\ApprovalJsonResponseAttributeTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class ApprovalJsonResponseAttributeTraitTest
 *
 * Test case for the ApprovalJsonResponseAttributeTrait trait.
 *
 * @package EasyPay\PHP\Yigim\Tests\Traits\JsonResponse\Attributes
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
