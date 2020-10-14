<?php

    session_start();
    session_destroy();
    header("Location: http://localhost/Tennis_Joint/Home_Page.php");
?>