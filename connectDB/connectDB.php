<?php
    $conn = mysqli_connect("localhost","root","","kkusmartfarm");
    if($conn->errno){
        echo "Please Try Agin";
    }
    // $conn->set_charset("utf8");
    mysqli_set_charset($conn,"utf8");
    // mysqli_set_charset($conn,"utf8");
?>