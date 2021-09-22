<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExercisesTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals(Exercises::decimalToRoman(1), "I");
    }

}