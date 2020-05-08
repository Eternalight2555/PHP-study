<?php
    echo "身長を入力してください: ";
    $height = trim(fgets(STDIN))/100; //単位をメートルに直す
    echo "体重を入力してください: ";
    $body_weight = trim(fgets(STDIN));
    
    $bmi=$body_weight/($height*$height);
    
    if($bmi<18.5){
        echo "あなたは、低体重です。\n";
    }else if($bmi<25){
        echo "あなたは、普通体重です。\n";
    }else{
        echo "あなたは、肥満です。\n";
    }
?>