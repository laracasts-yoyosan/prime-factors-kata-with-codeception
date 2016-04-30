<?php

namespace App;

class PrimeFactors
{
    /**
     * Generate a list of prime numbers for a given number.
     * @param  integer $number
     * @return array
     */
    public function generate($number)
    {
        $result = [];

        for ($candidate = 2; $number > 1; $candidate++) {
            for (; $number % $candidate === 0; $number /= $candidate) {
                $result[] = $candidate;
            }
        }

        return $result;
    }
}
