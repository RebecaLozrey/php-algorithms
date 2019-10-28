<?php
//  4   5   3   9   1
//  each pass iterate from 0 to 3 only
//  if you didnt swap any item, the array is sorted
//  perform as many passes until the array is sorted
//  worst case scenario, descending array, four passes will be performed



class BubbleSorter{
    protected $input_array;
    public function __construct($input_array){
        $this->input_array = $input_array;
    }
     public function bubble_sort(){
        $current_array = $this->input_array;
        $size = sizeof($current_array);
        $last_index = array_key_last($current_array);


        if (isset($current_array) && $size > 1)
            for($j = 0; $j <= $last_index; $j++){
                $is_sorted = true;
                for($i = 0; $i < $last_index; $i++){
                    if ($current_array[$i + 1] >= $current_array[$i]
                    ) continue;
                    $is_sorted = false;
                    $this->swap($current_array, $i , $i + 1);

                }
                if ($is_sorted == true) return $current_array;
            }     
        else return $current_array;
    }

    private function swap(&$array, $first_index, $second_index){
        $temp = $array[$second_index];
        $array[$second_index] = $array[$first_index];
        $array[$first_index] = $temp;
    }
}






?>