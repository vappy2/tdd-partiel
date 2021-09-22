<?php

use Exercises as GlobalExercises;

class Exercises
{
    public static function isPrimeNumber(int $number)
    {
        for ($i = 2; $i < $number; $i++){
            if($number % $i == 0){
               return false;
            }else{
                return true;
            }
        }
    }

    public static function isPrimeFactor($number){

        $primes= [];

        for($i = 2; $i <= $number; $i++){
            while ($number % $i == 0){
                $primes[] = $i;
                $number /= $i;
            }
        }
        
        return $primes;
    }
}