<?php

use Exercises as GlobalExercises;

class Exercises
{
    public static function decimalToRoman(int $n) : string
    {
        $romanNumber = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'X' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];

        $result = '';

        while($n > 0){
            foreach ($romanNumber as $roman => $rnb)
            {
                if($n >= $rnb)
                {
                    $n -= $rnb;
                    $result .= $roman;
                    break;
                }
            }
        }
        
        return $result;
    }

    public static function romanToDecimal(string $romanNb) : int 
    {
        $romanNumber = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'X' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];

        $result = '';
        
        if($romanNb == "I"){
            return 1;
        }

        if($romanNb == "IV"){
            return 4;
        }
    }

}