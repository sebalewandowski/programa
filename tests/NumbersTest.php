<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Programa\Util\CalculateNumbers;

class NumbersTest extends TestCase
{
    /**
     * @test
     */
    public function isOddNumber()
    {
        $number = 3;
        $calculate = new CalculateNumbers();
        $this->assertTrue($calculate->isOdd($number));
    }

    /**
     * @test
     */
    public function isEvenNumber()
    {
        $number = 2;
        $calculate = new CalculateNumbers();
        $this->assertTrue($calculate->isEven($number));

    }

    /**
     * @test
     */
    public function isTwiceOfEvenNumbersCorrect()
    {
        $numbers = [1,2,3,4,5];
        $calculate = new CalculateNumbers();
        $calculate->init($numbers);
        $result = $calculate->threeTimesOfEvenNumbers();

        $this->assertEquals(18, $result);
    }

    /**
     * @test
     */
    public function isThreeTimesOfOddNumbersCorrect()
    {
        $numbers = [1,2,3,4,5];
        $calculate = new CalculateNumbers();
        $calculate->init($numbers);
        $result = $calculate->twiceOfOddNumbers();

        $this->assertEquals(18, $result);
    }

    /**
     * @test
     */
    public function isComparasionCorrect()
    {
        $numbers = [1,2,3,4,5];
        $calculate = new CalculateNumbers();
        $calculate->init($numbers);
        $result = $calculate->comparasion();

        $this->assertEquals(2, $result);
    }
}