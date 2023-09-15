<?php


// 1.	A program that calculates the average of the numbers in an array of n elements. The array is filled with random numbers. 

$n = 10; 

$numbers = [];

for ($i = 0; $i < $n; $i++) {
    $numbers[] = rand(1, 100);
}

$sum = array_sum($numbers);

$average = $sum / $n;

echo "Array: " . implode(", ", $numbers) . "\n";
echo "Sum: $sum\n";
echo "Average: $average\n";








// 2.	A program in which an array contains 10 numbers and another array 2D of size 2x5. What is required is that the second array is dictated by the first array.


$firstArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$secondArray = [];

$row = 0;
$col = 0; 
foreach ($firstArray as $number) {
    $secondArray[$row][$col] = $number;

    $col++;

    if ($col == 5) {
        $row++;
        $col = 0;
    }
}

for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $secondArray[$i][$j] . " ";
    }
    echo "\n"; 
}




// 3.	A program in which an array of a group of numbers and print the largest and smallest number
// INPUT: 
// $array = [ 1,10,5,2,11]
// OUTPUT: 
// Largest number is: 11
// Smallest number is: 1

$array = [1, 10, 5, 2, 11];

$largest = $array[0];
$smallest = $array[0];

foreach ($array as $number) {
    if ($number > $largest) {
        $largest = $number;
    }
    if ($number < $smallest) {
        $smallest = $number;
    }
}

echo "Largest number is: $largest\n";
echo "Smallest number is: $smallest\n";



// 4.	The program, in which an array contains 10 numbers, and you store a number and calculates how many numbers are greater  than or equal and how many numbers are smaller  than this number inside.
// INPUT: 
// $array = [ 1,10,5,2,11]
// $x = 3
// OUTPUT: 
// Numbers Smaller than (3) = 2 
// Numbers Greater then (3) = 3

$array = [1, 10, 5, 2, 11];

$x = 3;

$greaterCount = 0;
$smallerCount = 0;

foreach ($array as $number) {
    if ($number >= $x) {
        $greaterCount++;
    } else {
        $smallerCount++;
    }
}

echo "Numbers Smaller than ($x) = $smallerCount\n";
echo "Numbers Greater than ($x) = $greaterCount\n";


// 5.	Create a function that takes an array of names and returns an array where only the first letter of each name is capitalized.
// INPUT: 
// Array_of_names(["eraasoft", "backend", "group313"]) 
// OUTPUT: 
//  ["EraaSoft", "Backend", "Group313"]

function capitalizeFirstLetter($names) {
    $capitalizedNames = [];
    
    foreach ($names as $name) {
        $capitalizedNames[] = ucfirst($name);
    }
    
    return $capitalizedNames;
}

$names = ["eraasoft", "backend", "group313"];

$capitalizedNames = capitalizeFirstLetter($names);

print_r($capitalizedNames);


// 6.	Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements. Note that you must do this in-place without making a copy of the array.
// INPUT: 
// nums = [0,1,0,3,12] 
// OUTPUT:
//  nums = [1,3,12,0,0]

unction moveZeroes(&$nums) {
    $nonZeroIndex = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] != 0) {
            $temp = $nums[$i];
            $nums[$i] = $nums[$nonZeroIndex];
            $nums[$nonZeroIndex] = $temp;
            $nonZeroIndex++;
        }
    }
}

$nums = [0, 1, 0, 3, 12];

moveZeroes($nums);

print_r($nums);


// 7.	Write a function that searches an array of names (unsorted) for the name "Bob" and returns the location in the array. If Bob is not in the array, return -1.


function findBob($names) {
    for ($i = 0; $i < count($names); $i++) {
        if ($names[$i] === "Bob") {
            return $i; 
        }
    }
    return -1; 
}

$names1 = ["Alice", "Bob", "Charlie", "Dave"];
$names2 = ["Alice", "Charlie", "Dave"];

echo findBob($names1) . "\n"; 
echo findBob($names2) . "\n"; 





// 8.	Create a function that takes a array of numbers and returns the second largest number.
// INPUT: 
// $numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10]
// OUTPUT:
// 11

function findSecondLargest($numbers) {
    $largest = $secondLargest = PHP_INT_MIN;

    foreach ($numbers as $number) {
        if ($number > $largest) {
            $secondLargest = $largest;
            $largest = $number;
        } elseif ($number > $secondLargest && $number !== $largest) {
            $secondLargest = $number;
        }
    }

    return $secondLargest;
}

$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo findSecondLargest($numbers) . "\n";



function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}




// 9.	A program containing an array of different numbers and store a number $x If the number is not in the array prints not found and if it exists prints found and prints this number characteristics like

function checkNumberCharacteristics($numbers, $x) {
    if (in_array($x, $numbers)) {
        echo "Found, ";

        echo $x >= 0 ? "Positive, " : "Negative, ";

        $digitCount = strlen(abs($x));
        echo "Number of Digits: $digitCount, ";

        echo isPrime(abs($x)) ? "Prime, " : "Not Prime, ";

        echo $x % 2 === 0 ? "Even, " : "Odd, ";

        $xStr = (string)$x;
        $isPalindrome = $xStr === strrev($xStr);
        echo $isPalindrome ? "Yes 🡺 read from the right as the left" : "No";
    } else {
        echo "Not Found";
    }
}

$numbers1 = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x1 = 545;

$numbers2 = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x2 = 1000;

checkNumberCharacteristics($numbers1, $x1);
echo "\n";
checkNumberCharacteristics($numbers2, $x2);
?>


