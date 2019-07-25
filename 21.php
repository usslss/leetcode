<?php
//21. Merge Two Sorted Lists
//https://leetcode.com/problems/merge-two-sorted-lists/

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2)
    {
        $length1 = count($l1);
        $length2 = count($l2);
        var_dump($l1);
        for ($i = 0; $i < $length1; $i++) {
            $arr[$i] = $l1[$i];
        }
        for ($i = 0; $i < $length2; $i++) {
            $arr[($length1 + $i)] = $l2[$i];
        }
        asort($arr);
        //var_dump($arr);
        return $arr;
    }
}
$l1 = [1, 2, 4];
$l2 = [1, 3, 4];
$a[0] = new Solution;
//$b = $a->mergeTwoLists($l1, $l2);

class ListNode
{ 
   public $l1 = [1, 2, 4]; 
    public $l2 = [1, 3, 4];
}
$x= new ListNode;
var_dump($x->$l1);
