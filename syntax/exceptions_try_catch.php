<?php
// what to do with exceptions generated inside a block of code
// try or execute this code, and catch any exceptions and do something with this object

try{

    for($i = 10; $i >= 0; $i--){
        //if ($i == 5) throw new Exception("The input value cant be 5");
        //this exits the program
        echo 10/$i;
        echo "<br>";
    }

}catch(Exception $e){
echo $e->getMessage(); //this is just a warning
}finally{
    //Do something after catching the exception
}
