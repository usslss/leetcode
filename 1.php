<?php
//1. Two Sum
//https://leetcode.com/problems/two-sum/

class Solution
{
    public function twoSum($nums, $target)
    {
        $sum = count($nums);
        for ($i = 0; $i < $sum; $i++) {
            for ($j = $i + 1; $j < $sum; $j++) {
                if (($nums[$i] + $nums[$j]) == $target) {
                    return array($i, $j);
                }
            }
        }
    }
}
