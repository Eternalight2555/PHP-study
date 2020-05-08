<?php
    $check = 37.3;
    if($check >= 37.5){
        echo "コロナの可能性あり";
    }else if($check > 37.0){
        echo "微熱です";
    }else{
        echo "平熱です。";
    }
?>