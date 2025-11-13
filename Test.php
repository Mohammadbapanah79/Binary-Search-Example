<?php

$list = [10, 15, 8, 2, 4, 3, 7, 12, 52, 6, 17];

function findSmallest($arr)
{
    $smallest = $arr[0];
    $smallestIndex = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}

function selectionSort($arr)
{
    $newArr = [];
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        $smallest = findSmallest($arr);
        $newArr[] = $arr[$smallest];
        array_splice($arr, $smallest, 1);
    }

    return $newArr;
}

print_r(selectionSort($list));
