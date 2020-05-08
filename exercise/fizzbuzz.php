<?php
    for($i=1;$i<=100;$i++){
        $temp_char="";
        if($i%3===0){
            $temp_char="Fizz";
        }
        if($i%5===0){
            $temp_char=$temp_char."Buzz";
        }
        if($temp_char===""){
            $temp_char=$i;
        }
        echo $temp_char." ";
        if($i%10===0){
            echo "\n";
        }
    }
?>