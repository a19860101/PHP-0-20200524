<?php
    class User {
        public $a=100;
        // protected $b;
        // private $c;

        static function go(){
            return 999;
        }
    }
    //建立實體
    $user = new User;
    // echo $user->a;
    echo $user->go();
