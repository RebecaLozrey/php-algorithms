<?php

class SelectionSorter {
    public $input_array;
    public function __construct($input_array){
        $this->input_array = $input_array;
    }
    public function sel_sort(){
        $current_array = $this->input_array;
        $size = sizeof($current_array);
       
        //  8   9   3   4   5   3 
       //   i
       //       j
       //           m

       if (isset($current_array) && $size > 1){
            for($i = 0; $i < $size; $i++){
                $m = $i;
                    for($j = $i; $j < $size; $j++){
                        if($current_array[$j] < $current_array[$m])
                        $m = $j; //index of the minimum value 
                    }
                $temp = $current_array[$i];
                $current_array[$i] = $current_array[$m];
                $current_array[$m] = $temp;
            }
            return print_r($current_array)."<br><br><br>";
        }
        else return print_r($current_array)."<br><br><br>";
    }



}



?>