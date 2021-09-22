<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExercisesTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals([], Exercises::isPrimeFactor(1), "1 n'a pas de facteur premier");
    }

    public function testTwo()
    {
        $this->assertEquals([2], Exercises::isPrimeFactor(2), "2 a un seul facteur premier");
    }

    public function testThree()
    {
        $this->assertEquals([3], Exercises::isPrimeFactor(3), "3 a un seul facteur premier");
    }
    public function testFour()
    {
        $this->assertEquals([2, 2], Exercises::isPrimeFactor(4), "4 a 2 facteurs premiers");
    }
}