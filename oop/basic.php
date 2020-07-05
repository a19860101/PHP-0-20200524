<?php
    class Phone {
        public $a=100;
        public $b = 60;
        private $c = 999;
        protected $d = 666;

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
    //繼承
    class Pad extends Phone {
        function test(){
            return $this->d;
        }
    }
    //建立實體
    // echo Pad::move();
    $iphone = new Phone;
    $ipad = new Pad;

    // echo $iphone->gogogo();
    echo $ipad->test();




    // echo  Phone::move();
    // $iphone = new Phone;
    // echo $iphone->gogogo();
    // echo $iphone->move();
    // echo $iphone->go();
    // echo $iphone->b;
    // echo $iphone->c;
    // $iphone -> a = "black"; 
    // $samsung = new Phone;
    // $samsung -> a = "red";
