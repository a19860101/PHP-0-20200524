<?php
    // echo $_POST;
    // var_dump($_POST);
    // echo $_POST["user"];
    // echo "<br>";
    // echo $_POST["mail"];

    // var_dump($_GET);
    // echo $_GET["user"];
    // echo "<br>";
    // echo $_GET["mail"];

    var_dump($_REQUEST);
    echo $_REQUEST["user"];
    echo "<br>";
    echo $_REQUEST["mail"];
    echo "<br>";
    echo $_REQUEST["gender"];
    echo "<br>";
    echo $_REQUEST["edu"];
    echo "<br>";
    // var_dump($_REQUEST["skills"]);
    // foreach($_REQUEST["skills"] as $skill){
    //     echo $skill;
    // }
    echo implode(",",$_REQUEST["skills"]);