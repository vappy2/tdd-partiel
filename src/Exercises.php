<?php

use Exercises as GlobalExercises;

class Exercises
{
    public static function decimalToRoman(int $n) : string
    {
        $romanNumber = array(
            'I' => 1,
            'IV' => 4,
            'V' => 5,
            'IX' => 9,
            'X' => 10,
            'XL' => 40,
            'X' => 50,
            'XC' => 90,
            'C' => 100,
            'CD' => 400,
            'D' => 500,
            'CM' => 900,
            'M' => 1000
        );

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

}