<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Service\SumaArray;

class SumaArrayTest extends TestCase
{
    public function testArrayNumber(): void
    {
        $array = [1, 4, 3, 0];
        $this->methodArray($array, 8);
    }

    public function testArraySubarray()
    {
        $array = [1, 2, [5, 8], 4];
        $this->methodArray($array, 20);
    }

    public function testArraySubarrayNull()
    {
        $array = [0, [6, 2], null, 7, 1];
        $this->methodArray($array, 16);
    }

    private function methodArray($array, $resultArray)
    {
        $array = [1, 4, 3, 0];
        $sumaArray = new SumaArray($array);

        $this->assertEquals($sumaArray($array), $resultArray);
    }
}
