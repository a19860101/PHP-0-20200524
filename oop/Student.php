<?php
    class Student extends DB {
        function showAll(){
            try {
                $sql = "SELECT * FROM students";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                $rows = array();
                while($row = $stmt->fetch()){
                    $rows[] = $row;
                }
                return $rows;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
