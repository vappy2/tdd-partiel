<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExercisesTest extends TestCase
{
    /*public function testZero(){
        $this->assertEquals(Exercises::decimalToRoman(0),'');
    }
    public function testOne()
    {
        $this->assertEquals(Exercises::decimalToRoman(1), "I");
    }

    public function testTwo()
    {
        $this->assertEquals(Exercises::decimalToRoman(2), "II");
    }

    public function testThree()
    {
        $this->assertEquals(Exercises::decimalToRoman(4), "IV");
    }*/

    public function testOneBis(){
        $this->assertEquals(Exercises::romanToDecimal("I"), 1);
    }

    public function testTwoBis()
    {
        $this->assertEquals(Exercises::romanToDecimal("IV"), 4);
    }

}