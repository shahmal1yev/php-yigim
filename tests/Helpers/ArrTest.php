<?php

namespace Helpers;

use Shahmal1yev\EasyPay\Yigim\Helpers\Arr;
use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{
    public function getArrayForTesting(): array
    {
        return [
            'article' => [
                'content' => 'content',
                'meta' => ['keywords' => $keywords = ['keyword 1' => 'keyword 1', 'keyword 2' => 'keyword 2']],
                'images' => [
                    'cover' => ['1920x1080' => 'cover-1920x1080'],
                    'content' => ['in_order' => ['content-image-1', 'content-image-2']]
                ],
                'deleted_at' => null
            ],
        ];
    }

    public function testGetMethodWithEmptyArray()
    {
        $this->assertEquals(null, Arr::get([], 'key'));
    }

    public function testGetMethodWithNullValue()
    {
        $array = $this->getArrayForTesting();
        $this->assertEquals(null, Arr::get($array, 'article.deleted_at'));
    }

    public function testGetMethodWithoutDotNotation()
    {
        $array = $this->getArrayForTesting();
        $this->assertEquals($array['article'], Arr::get($array, 'article'));
    }

    public function testGetMethodWithDotNotation()
    {
        $array = $this->getArrayForTesting();
        $keywords = $array['article']['meta']['keywords'];

        $this->assertEquals('content', Arr::get($array, 'article.content'));
        $this->assertEquals($keywords, Arr::get($array, 'article.meta.keywords'));
        $this->assertEquals('cover-1920x1080', Arr::get($array, 'article.images.cover.1920x1080'));
        $this->assertEquals('content-image-2', Arr::get($array, 'article.images.content.in_order.1'));
    }

    public function testGetMethodWithNonexistentKey()
    {
        $array = $this->getArrayForTesting();
        $this->assertEquals(null, Arr::get($array, 'nonexistent key'));
    }

    public function testGetMethodWithNonexistentKeyUsingDotNotation()
    {
        $array = $this->getArrayForTesting();
        $this->assertEquals(null, Arr::get($array, 'article.title'));
    }

    public function testGetMethodWithValidAndInvalidKey()
    {
        $array = $this->getArrayForTesting();
        $this->assertEquals(null, Arr::get($array, 'article.content.author'));
    }

    public function testGetMethodWithDefaultForEmptyArray()
    {
        $defaultValue = "Default value";
        $this->assertEquals($defaultValue, Arr::get([], 'nonexistent key', $defaultValue));
    }

    public function testGetMethodWithDefaultForNullValue()
    {
        $defaultValue = "Default value";
        $array = $this->getArrayForTesting();
        $this->assertEquals(null, Arr::get($array, 'article.deleted_at', $defaultValue));
    }

    public function testGetMethodWithDefaultForExistingKey()
    {
        $defaultValue = "Default value";
        $array = $this->getArrayForTesting();
        $this->assertEquals('content-image-2', Arr::get($array, 'article.images.content.in_order.1', $defaultValue));
    }

    public function testExistsWithExistingKey()
    {
        $this->assertTrue(Arr::exists($this->getArrayForTesting(), 'article'));
    }

    public function testExistsWithNonexistentKey()
    {
        $this->assertFalse(Arr::exists([], 'article'));
    }

    public function testExistsWithNonArrayInput()
    {
        $this->assertFalse(Arr::exists(new \stdClass(), 'article'));
        $this->assertFalse(Arr::exists("string", 'article'));
        $this->assertFalse(Arr::exists(1.5, 'article'));
    }
}
