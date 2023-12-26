<?php
session_start();

if (isset($_SESSION["favcolor"])){
    echo "NO";
    } else {
        echo $_SESSION["favcolor"];
        echo $_SESSION["testkey"];
        $test = $_SESSION["testarray2"];
        print_r($test);
        // foreach ($test as $a){
        //     foreach ($a as $i){
        //         echo $i;
        //     }
        // }
        if (array_key_exists("key4",$test))
        {
        echo "Key exists!";
        }
    }
    
?>