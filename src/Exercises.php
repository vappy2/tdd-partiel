<?php

use Exercises as GlobalExercises;

class Exercises
{
    public static function decimalToRoman(int $n) : string
    {

        if($n == 1){
            return "I";
        }

        if($n == 2){
            return "II";
        }
    }
}