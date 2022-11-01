<?php

function addTwoNumbers($l1, $l2)
{
    $num1 = 0;
    $num2 = 0;

    $l1 = new SplDoublyLinkedList;
    $l2 = new SplDoublyLinkedList; 
    
    $l1->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    $l2->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

    while ($l1->valid()) {
        $num1 .= $l1->current();
        $l1->next();
    }

    while ($l2->valid()) {
        $num2 .= $l2->current();
        $l2->next();
    }
}
?>