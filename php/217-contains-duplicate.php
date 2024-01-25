<?php

# Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

# Input: nums = [1,2,3,1]
# Output: true

/**
 * param Integer[] $nums
 * return Boolean
 */

function containsDuplicate($nums)
{
    return $nums != array_unique($nums);
}

// TESTING
var_dump(containsDuplicate(array(1,2,3,4)));