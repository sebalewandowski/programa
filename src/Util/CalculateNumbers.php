<?php

namespace Programa\Util;

class CalculateNumbers
{
    const TWICE_TIME_MULTIPLATOR = 2;
    const THREE_TIME_MULTIPLATOR = 3;

    /**
     * @var array
     */
    private $oddNumbers;

    /**
     * @var array
     */
    private $evenNumbers;

    public function __construct()
    {
    }

    public function init($numbers)
    {
        foreach ($numbers as $number) {
            if ($this->isOdd($number)) {

                $this->oddNumbers[] = $number;
            }

            if ($this->isEven($number)) {
                $this->evenNumbers[] = $number;
            }
        }
    }

    public function comparasion()
    {
        $result = 0;

        if ($this->threeTimesOfEvenNumbers() == $this->twiceOfOddNumbers()) {
            return 2;
        }

        if ($this->threeTimesOfEvenNumbers() > $this->twiceOfOddNumbers()) {
            return 1;
        } else {
            return 0;
        }
    }

    public function threeTimesOfEvenNumbers()
    {
        $result = 0;

        if (empty($this->evenNumbers)) return $result;

        foreach ($this->evenNumbers as $evenNumber) {
            $result += $evenNumber;
        }

        return $result * self::THREE_TIME_MULTIPLATOR;
    }

    public function twiceOfOddNumbers()
    {
        $result = 0;

        if (!isset($this->oddNumbers)) return $result;

        foreach ($this->oddNumbers as $oddNumber) {
            $result += $oddNumber;
        }

        return $result * self::TWICE_TIME_MULTIPLATOR;
    }

    public function isOdd($number)
    {
        return $number % 2 !== 0 ?? false;
    }

    public function isEven($number)
    {
        return $number % 2 === 0 ?? false;
    }
}
