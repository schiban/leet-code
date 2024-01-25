<?php

# Given an integer x, return true if x is a palindrome, and false otherwise.

# Input: x = 121
# Output: true
# Explanation: 121 reads as 121 from left to right and from right to left.

/**
 * param Integer $x
 * return Boolean
 */

function isPalindrome($x)
{
    return $x == strrev($x) ? true : false;
}

// TESTING
var_dump(isPalindrome(121));