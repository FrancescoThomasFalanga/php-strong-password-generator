<?php

// function randomPasswordGenerator() {

//     $length = $_GET["length"] ?? "";

//     $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890;:_-.,+?^=)(/&%$"!|';

//     $pass = array();

//     $alphaLength = strlen($alphabet) - 1;

//     for ($i = 0; $i < $length; $i++) {

//         $n = rand(0, $alphaLength);
//         $pass[] = $alphabet[$n];
        
//     }

//     return implode($pass);

// };

function randomPasswordGenerator( $length ) {

    if ($length != null) {

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789;:_-.,+?^=)(/&%$!|";

        header("Location: ./result.php");

        return substr(str_shuffle($chars),0,$length);

    };
    

}