<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
$player_hand=$_POST["playerHand"];
$pc_hand=rand()%3;
$result="";

$result_check=($player_hand-$pc_hand+3)%3;

if($result_check==0){
    $result="あいこ";
}else if($result_check==1){
    $result="負け！";
}else{
    $result="勝ち！";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <p class="result-word">
                <?php
                    echo $result;
                ?>
            </p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：
            <?php
            if($player_hand==0){
                echo "ぐー";
            }else if($player_hand==1){
                echo "ちょき";
            }else{
                echo "ぱー";
            }
            ?>
            <br>
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：
            <?php
            if($pc_hand==0){
                echo "ぐー";
            }else if($pc_hand==1){
                echo "ちょき";
            }else{
                echo "ぱー";
            }
            ?>
            <br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>