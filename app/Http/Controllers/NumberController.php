<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function add_two_numbers()
    {
        $array = [1, 3, 5, 9, 13, 15, 16, 14];
        $sum = 12;
        $array_size = sizeof($array);

        echo "Sample array is: [1, 3, 5, 9, 13, 15, 16, 14]<br>";
        echo "Sum should be 12 and first two numbers are: \n";
        return $this->findTwoNumber($array, $array_size, $sum);
    }

    private function findTwoNumber($array, $array_size, $sum)
    {
        $start = 0;
        $end = $array_size - 1;
        while ($start < $end) {
            if ($array[$start] + $array[$end] == $sum)
                return $array[$start] . ', ' . $array[$end];
            else if ($array[$start] + $array[$end] < $sum)
                $start++;
            else
                $end--;
        }
        return 0;
    }
}