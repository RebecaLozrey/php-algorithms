
<?php

include_once "bubble_sort.php";
include_once "selection_sort.php";

echo "<br><br>SELECTION SORT<br><br>";

$array2 = array(5,4,3,2,1);
$first_selection_sorter = new SelectionSorter($array2);
$first_selection_sorter->sel_sort();

echo "<br><br>BUBBLE SORT<br><br>";

$array1 = array(5,4,3,2,1);
$first_BubbleSorter = new BubbleSorter($array1);
$first_BubbleSorter->bubble_sort();

