<?php
//14. Longest Common Prefix
//https://leetcode.com/problems/longest-common-prefix/

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $length = count($strs);
        if ($length == 0) {
            return '';
        }
        $wordLength = strlen($strs[0]);

        for ($i = 0; $i < $length; $i++) {
            if (strlen($strs[$i]) < $wordLength) {
                $wordLength = strlen($strs[$i]);
            }
        }

        $preFix = '';
        for ($i = 0; $i < $wordLength; $i++) {
            $letter = $strs[0][$i];
            $isSame = 1;
            for ($j = 0; $j < $length; $j++) {
                if ($strs[$j][$i] != $letter) {
                    $isSame = 0;
                    return $preFix;
                }
            }

            if ($isSame == 1) {
                $preFix = $preFix . $letter;
            }
        }
        return $preFix;
    }
}