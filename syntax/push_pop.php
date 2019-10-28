
<?php

//POP removes the last item in the array and returns it
//PUSH add one item to the end of the array


    $array1 = array(1,4,6,7);
    array_push($array1, 24,3,2);
    print_r($array1);
    echo "<br>";

    echo $last_element = array_pop($array1);
    echo "<br>";
    print_r($array1);
