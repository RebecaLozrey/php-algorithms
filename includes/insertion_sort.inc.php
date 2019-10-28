<?php

//  8   2   4   1   3
//  j temp
//      j temp
//          j temp
// enconrar el lugar donde array[i + 1] donde array[i] < temp
// recorrer primer arreglo hasta el lugar de temp



class InsertionSorter{
    protected $input_array;

    public function __construct($input_array){
        $this->input_array = $input_array;
    }

    public function insert_sort(){
        $current_array = $this->input_array;
        $last_index = array_key_last($current_array);
        //FIRST POINTER
        for ($j = 1; $j <= $last_index; $j++){
            $temp = $current_array[$j];

            for ($i = $j - 1; $i >= 0; $i--){
                if ($temp < $current_array[$i]){
                    $current_array[$i + 1 ] = $current_array[$i];
                }
                if ($current_array[$i] > $temp){
                $current_array[$i] = $temp;
                continue;
                }
            }
        }
        return $current_array;
    }


}

