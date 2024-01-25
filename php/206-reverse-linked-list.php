<?php

/**
 # Given the head of a singly linked list, reverse the list, and return the reversed list.

 # Input: head = [1,2,3,4,5]
 # Output: [5,4,3,2,1]

 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

 /**
 * param ListNode $head
 * return ListNode
 */

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function reverseList(ListNode $head)
{
    $previous = null;
    $current = $head;

    while ($current !== null)
    {
        # Stores the next node in the original list before modifying it.
        $next = $current->next;
        # Reverses the pointer direction, making the current node point to the previous node.
        $current->next = $previous;
        # Updates the $previous variable to the current node for the next iteration.
        $previous = $current;
        # Moves to the next node in the original list for the next iteration.
        $current = $next;
    }

    return $previous;
}

// TESTING
// $node = new ListNode(1);
// $node->next = new ListNode(2);
// $node->next->next = new ListNode(3);
// $node->next->next->next = new ListNode(4);
// $node->next->next->next->next = new ListNode(5);

$head = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));

print_r(reverseList($head));