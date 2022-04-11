<?php

function tukar(array $arr1, array $arr2)
{
    $array = [];

    if (count($arr1) > 0 || count($arr2) > 0) {
        for ($i = 0; $i < count($arr1); $i++) {
            $array[] = $arr1[$i];
        }

        for ($i = 0; $i < count($arr2); $i++) {
            $array[] = $arr2[$i];
        }
        // return $array;

        for ($i = 0; $i < count($array); $i++) {
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    } else {
        return 'Inputan array tidak boleh kosong';
    }
}
$arr1 = [1, 2, 5, 7, 3];
$arr2 = [3, 4, 8];
$tukar = tukar($arr1, $arr2);
var_dump($tukar);
