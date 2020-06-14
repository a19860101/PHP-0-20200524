<?php
    session_start();
    echo $_SESSION["USER"];
    



?>
<a href="destroy.php?q=true">delete session</a>
