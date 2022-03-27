<?php

namespace App\Service;

class SumaArray
{
    public function __invoke($array)
    {
        $result = 0;
        foreach ($array as $key => $value) {
            $result = $result + $value;
        }
        return $result;
    }
}
