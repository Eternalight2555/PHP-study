<?php
    //入力チェック用関数 入力が正しい→true, 入力が不正→false
    function InputCheck($inputData){
        $inputDataStr=strval($inputData);
        $inputLen=strlen($inputDataStr);
        $inputDataArray=str_split($inputDataStr);
        //桁数チェック
        if(3>$inputLen||$inputLen>3){
            return false;
        }
        //重複チェック
        $value_count = array_count_values($inputDataArray);
        $max = max($value_count); 
        if ($max == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    //HitおよびBlowの数をチェックする関数 3Hitでtrueを返す
    function HitBlowCheck($inputData,$answerData,$count){
        $hit=0;
        $blow=0;
        $inputDataStr=strval($inputData);
        $inputLen=strlen($inputDataStr);
        $inputDataArray=str_split($inputDataStr); 
        
        for($j=0;$j<$inputLen;$j++){
            if($inputDataArray[$j]==$answerData[$j]){
                $hit++;
            }else if(in_array($inputDataArray[$j],$answerData)){
                $blow++;
            }
        }
        
        if($hit==3){
            echo "正解です!".$count."回目でクリアです!!\n";
            return true;
        }else{
            echo "Hit:".$hit.", Blow:".$blow." です。\n";
            return false;
        }
    }

    $num_shuffle = range(0,9);
    shuffle($num_shuffle);
    
    /*デバック用配列内容表示
    foreach($num_shuffle as $temp){
        echo $temp;        
    }*/
    $num_answer = array_slice($num_shuffle,0,3);

    /**デバック用配列内容表示
    foreach($num_answer as $temp){
        echo $temp;        
    }*/
    
    $i=1;
    while(true){
        echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
        echo $i."回目のチャレンジ!\n";
        echo "3桁の半角数字を重複なしで入力してください:";
        $num_imput = trim(fgets(STDIN));
        if(!InputCheck($num_imput)){
           echo "エラー:3桁の半角数字を重複なしで入力してください!\n";
        }else{
            if(HitBlowCheck($num_imput,$num_answer,$i)){
                break;
            }
        }
        $i++;
    }
    
?>