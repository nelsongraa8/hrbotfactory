<?php

namespace App\Service;

class SumaArray
{
    public function __invoke($array)
    {
        $result = 0;

        foreach ($array as $key => $value) {
            if (is_null($value)) {
                $result = $result;
            }
            if (is_array($value)) {
                $r = 0;
                foreach ($value as $key => $val) {
                    $r = $r + $val;
                }
                $result = $result + $r;
            }
            if (is_numeric($value)) {
                $result = $result + $value;
            }
        }

        return $result;
    }
}
