<?php

namespace FizzBuzz;

class FizzBuzz
{

    public function count(int $int):string
    {
        if($this->isMultipleOf3($int)) return "Fizz";
        if($int === 5) return "Buzz";
        return strval($int) ;


    }

    /**
     * @param int $int
     * @return bool
     */
    public function isMultipleOf3(int $int): bool
    {
        return $int % 3 === 0;
    }


}