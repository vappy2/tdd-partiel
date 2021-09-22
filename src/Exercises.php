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
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];

        $result = '';

        if($n > 3000){
            return 'Nombre trop grand, choissisez un nombre inférieur à 3000 mais supérieur à 0';
        }

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
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];

        $result = 0;

        foreach ($romanNumber as $roman => $value)
        {
            while(strpos($romanNb, $roman) === 0){
                $result += $value;
                $romanNb = substr($romanNb, strlen($roman));
            }
        }

        return $result;
    }

}