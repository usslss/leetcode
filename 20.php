<?php
//20. Valid Parentheses
//https://leetcode.com/problems/valid-parentheses/

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $length = strlen($s);
        if (($length % 2) != 0) {
            return false;
        }
        $arr = array();
        for ($i = 0; $i < $length; $i++) {
            $arrLength = count($arr) - 1;
            if ($arrLength < 0) {
                $arrLength = 0;
            }
            switch ($s[$i]) {
                case '(';
                    array_push($arr, 'a');
                    break;
                case ')';
                    if ($arr[$arrLength] == 'a') {
                        array_pop($arr);
                    } else {
                        return false;
                    };
                    break;
                case '[';
                    array_push($arr, 'b');
                    break;
                case ']';
                    if ($arr[$arrLength] == 'b') {
                        array_pop($arr);
                    } else {
                        return false;
                    };
                    break;
                case '{';
                    array_push($arr, 'c');
                    break;
                case '}';
                    if ($arr[$arrLength] == 'c') {
                        array_pop($arr);
                    } else {
                        return false;
                    };
                    break;
            }
        }
        if (count($arr)==0) {
            return true;
        } else {
            return false;
        }
    }
}