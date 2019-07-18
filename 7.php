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
        $result = 0;
        while ($x != 0) {
            $result = $result * 10 + ($x % 10);
            $x = ($x - ($x % 10)) / 10;
        }
        if ($result > 2147483647 || $result < -2147483647) {
            return 0;
        }
        return $result;
    }
}