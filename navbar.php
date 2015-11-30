<?php
    if(isset($_SESSION['user'])) {
        include("login-navbar.php");
    } else {
        include("normal-navbar.php");
    }
?>
