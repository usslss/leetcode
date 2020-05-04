<?php
//13. Roman to Integer
//https://leetcode.com/problems/roman-to-integer/

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $roman['I'] = 1;
        $roman['V'] = 5;
        $roman['X'] = 10;
        $roman['L'] = 50;
        $roman['C'] = 100;
        $roman['D'] = 500;
        $roman['M'] = 1000;

        $length = strlen($s);
        $result = 0;

        for ($i = 0; $i < $length; $i++) {
            //处理最后落单的那位(如果确实有落单的)或者干脆只有一位的
            if ($i == $length - 1) {
                $result = $result + $roman[$s[$i]];
                return $result;
            }

            if ($roman[$s[$i]] >= $roman[$s[$i + 1]]) {
                $result = $result + $roman[$s[$i]];
            } else {
                $result = $result - $roman[$s[$i]];
            }
        }
        return $result;
    }
}