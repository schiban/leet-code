<?php

# Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
# You may assume that each input would have exactly one solution, and you may not use the same element twice.
# You can return the answer in any order.

# Input: nums = [2,7,11,15], target = 9
# Output: [0,1]
# Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

/**
 * param Integer[] $nums
 * paramInteger $target
 * return Integer[]
 */
function twoSum($nums, $target) {
    $size = count($nums);
    for($i = 0; $i < $size; $i++)
    {
        for($j = 0; $j < $size; $j++)
        {   
            if (($i != $j) && ((int) $nums[$i] + (int) $nums[$j] == $target))
            {
                $array[$i] = $nums[$i];
                $array[$j] = $nums[$j];
                return (array_keys($array));
                $i = $j = $size;
            }
        }
    }
}

// TESTING
var_dump(twoSum(array(3,2,4), 6));