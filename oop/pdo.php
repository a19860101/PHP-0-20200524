<?php
    class DB {
        private $db_host = "localhost";
        private $db_user = "admin";
        private $db_pw = "admin";
        private $db_name = "gjun";
        private $db_charset="utf8mb4";
    
        function connect(){
            try{
                $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};charset={$this->db_charset}";
                $pdo = new PDO($dsn,$this->db_user,$this->db_pw);
                return $pdo;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }