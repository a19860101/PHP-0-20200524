<?php
    session_start();


    if(isset($_GET["q"])){
        // session_destroy();
        unset($_SESSION["USER"]);
    }

    
