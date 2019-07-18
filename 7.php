<?php
//7. Reverse Integer
//https://leetcode.com/problems/reverse-integer/
class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        //我寻思着这个32位判断我做的也太糙了  不知道php里面有没有类似len(x)的函数
        if ($x > 2147483647 || $x < -2147483647) {
            return 0;
        }
        $i = 0;
        while ($x != 0) {
            $array[$i] = $x % 10;
            $x = ($x - $array[$i]) / 10;
            $i++;
        }
        $result = 0;
        $place = 1;
        for ($j = ($i - 1); $j >= 0; $j--) {
            $result = $result + $array[$j] * $place;
            $place = $place * 10;
        }
        if ($result > 2147483647 || $result < -2147483647) {
            return 0;
        }
        return $result;
    }
}