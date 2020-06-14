<?php
    // require_once("conn.php");
    // function showData($conn,$id){
        //略//
    // }
    function showData($id){
        global $conn;
        $sql = "SELECT * FROM students WHERE id = {$id}";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    function showAll(){}
    function store(){}
    function edit(){}
    function delete(){}
    function update(){}

