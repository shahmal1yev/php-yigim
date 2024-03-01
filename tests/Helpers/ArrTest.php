<?php

namespace Helpers;

use Shahmal1yev\EasyPay\Yigim\Helpers\Arr;
use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{
    public function testGetMethodWithEmptyArray()
    {
        $array = [];
        $this->assertEquals(null, Arr::get($array, 'key'));
    }

    public function testGetMethodWithNullValue()
    {
        $array = ['value' => null];
        $this->assertEquals(null, Arr::get($array, 'value'));
    }

    public function testGetMethodWithoutDotNotation()
    {
        $array = ['article' => ['content' => 'content']];
        $this->assertEquals(['content' => 'content'], Arr::get($array, 'article'));
    }

    public function testGetMethodWithDotNotation()
    {
        $array = [
            'article' => [
                'content' => 'content',
                'meta' => ['keywords' => $keywords = ['keyword 1' => 'keyword 1', 'keyword 2' => 'keyword 2']],
                'images' => [
                    'cover' => ['1920x1080' => 'cover-1920x1080'],
                    'content' => ['in_order' => ['content-image-1', 'content-image-2']]
                ]
            ],
        ];

        $this->assertEquals('content', Arr::get($array, 'article.content'));
        $this->assertEquals($keywords, Arr::get($array, 'article.meta.keywords'));
        $this->assertEquals('cover-1920x1080', Arr::get($array, 'article.images.cover.1920x1080'));
        $this->assertEquals('content-image-2', Arr::get($array, 'article.images.content.in_order.1'));
    }

    public function testGetMethodWithNonexistentKey()
    {
        $array = ['article' => ['content' => 'content']];
        $this->assertEquals(null, Arr::get($array, 'not exist key'));
    }

    public function testGetMethodWithNonexistentKeyUsingDotNotation()
    {
        $array = ['article' => ['content' => 'content']];
        $this->assertEquals(null, Arr::get($array, 'article.title'));
    }

    public function testGetMethodWithValidAndInvalidKey()
    {
        $array = ['article' => ['meta' => ['description' => 'description']]];
        $this->assertEquals(null, Arr::get($array, 'article.meta.keywords'));
    }
}
