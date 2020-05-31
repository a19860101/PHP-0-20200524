<?php
    // function test(){
        // echo "hello test";
    // }
    // test();
    // function test(){
    //     return "hello return";
    // }
    // echo test();
    // $q = test();
    // echo $q;
    // function q($x,$y){
        // return $x + $y;
    // }
    // function qq($x=100,$y=1000){
        // return $x + $y;
    // }
    // echo q(123);
    // echo qq(,321);
    $user = "John";
    function q(){
        global $user;
        return $user;
    }
    function q2(){
        global $user;
        echo $user;
    }
    echo q();

    q2();

