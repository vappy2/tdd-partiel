<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExercisesTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals(Exercises::decimalToRoman(1), "I");
    }

    /*public function testTwo()
    {
        $this->assertEquals(Exercises::decimalToRoman(2), "II");
    }*/

    public function testThree()
    {
        $this->assertEquals(Exercises::decimalToRoman(4), "IV");
    }

}