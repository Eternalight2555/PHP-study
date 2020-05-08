<?php
    function hello_user($name){
        $hello = "こんにちは";
        return $hello.$name."さん";
    }
    echo hello_user("ユーザ名");
?>