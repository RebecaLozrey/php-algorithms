<?php

class BubbleSorter{
    protected $input_array;
    public function __construct($input_array){
        $this->input_array = $input_array;
    }
     public function bubble_sort(){
        $current_array = $this->input_array;
        $size = sizeof($current_array);
        $isSorted = true;

        if (isset($current_array) && $size > 1)
            for($j = 0; $j < ($size - 1); $j++){
                for($i = 0; $i < ($size - 1); $i++){
                    if ($current_array[$i + 1] >= $current_array[$i]
                    ) continue;

                        $second = $current_array[$i+1];
                        $current_array[$i + 1]=$current_array[$i];
                        $current_array[$i]=$current_array[$second];
                        $isSorted = false;
            
                }
                if ($isSorted = true) return $current_array;
            }     
        else return $current_array;
    }
    
}






?>