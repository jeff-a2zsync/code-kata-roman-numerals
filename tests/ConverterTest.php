<?php


namespace Tests;

use App\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    private Converter $converter;
    public function setUp(): void
    {
        $this->converter = new Converter();
    }

    public function testCanConvertTheNumberOne()
    {
        $this->assertEquals('I', $this->converter->arabicToRoman(1));
    }
}
