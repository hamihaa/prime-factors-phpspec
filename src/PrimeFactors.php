<?php

class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];

        for ($divisor = 2; $number > 1; $divisor++) {

            while ($number % $divisor == 0)
            {
                $primes[] = $divisor;
                $number = $number / $divisor;
            }
        }

        return $primes;
    }
}
