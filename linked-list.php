<?php

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
    $current = $head;

    while ($current === null)
    {
        $current = $current->next;
    }

    return $head;
}

// Example usage:
$head = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));

print_r(reverseList($head));

// var_dump(reverseList([1,2,3,4,5]));