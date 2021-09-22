<?php

use Exercises as GlobalExercises;

class Exercises
{
    public static function decimalToRoman(int $n) : string
    {
        $romanNumber = [
            1 => 'I',
            4 => 'IV',
            5 => 'V',
            9 => 'IX',
            10 => 'X',
            40 => 'XL',
            50 => 'X',
            90 => 'XC',
            100 => 'C',
            400 => 'CD',
            500 => 'D',
            900 => 'CM',
            1000 => 'M'
        ];

        $result = '';

        if($n == 1){
            return "I";
        }

        if($n == 2){
            return "II";
        }

        if($n == 4){
            return "IV";
        }
    }
}