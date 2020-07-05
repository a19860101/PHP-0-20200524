<?php
    class Phone {
        public $a=100;
        public $b = 60;
        // protected $b;
        private $c = 999;

        function go(){
           return $this->a + $this->b;
        }
        function gogogo(){
            return $this->c;
        }
        static function move(){
            $x = "hello";
            return $x;
        }
    }
    //建立實體
    echo  Phone::move();
    // $iphone = new Phone;
    // echo $iphone->gogogo();
    // echo $iphone->move();
    // echo $iphone->go();
    // echo $iphone->b;
    // echo $iphone->c;
    // $iphone -> a = "black"; 
    // $samsung = new Phone;
    // $samsung -> a = "red";
