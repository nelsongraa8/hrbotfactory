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

    private function methodArray($array, $resultArray)
    {
        $array = [1, 4, 3, 0];
        $sumaArray = new SumaArray($array);

        $this->assertEquals($sumaArray($array), $resultArray);
    }
}
