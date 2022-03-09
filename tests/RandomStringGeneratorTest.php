<?php

namespace Dgdevpl\Tests;

use Dgdevpl\RandomStringGenerator\RandomStringGenerator;
use PHPUnit\Framework\TestCase;
use TypeError;

class RandomStringGeneratorTest extends TestCase
{
    public function testShouldReturnGoodValue()
    {
        $generatedValue = $this->createInstance()::generate(10);

        self::assertIsString($generatedValue);
        self::assertEquals(10, strlen($generatedValue));
        self::assertNotEmpty($generatedValue);
    }

    public function testShouldCheckParameterTypeProvidedFirst()
    {
        $this->expectException(TypeError::class);
        $this->createInstance()::generate('test');
    }

    public function testShouldCheckParameterTypeProvidedSecond()
    {
        $this->expectException(TypeError::class);
        $this->createInstance()::generate(null);
    }

    private function createInstance(): RandomStringGenerator
    {
        return new RandomStringGenerator();
    }
}
