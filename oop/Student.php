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
        function show($id){
            try {
                $sql = "SELECT * FROM students WHERE id = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$id]);
                $row = $stmt->fetch();
                return $row;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function store($name,$phone,$mail,$gender,$create_at){
            try{
                $sql = "INSERT INTO students(name,phone,mail,gender,create_at)VALUES(?,?,?,?,?)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$name,$phone,$mail,$gender,$create_at]);
                
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function delete($id){
            try {
                $sql = "DELETE FROM students WHERE id = ?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$id]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function update($name,$mail,$phone,$gender,$id){
            try{
                $sql = "UPDATE students 
                    SET 
                        name    = ?,
                        mail    = ?,
                        phone   = ?,
                        gender  = ?
                    WHERE 
                        id      = ?";
                $stmt = $this->connect()->prepare($sql);;
                $stmt->execute([$name,$mail,$phone,$gender,$id]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
