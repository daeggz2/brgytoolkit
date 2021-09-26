<?php
    session_start();
    unset($_SESSION['currentuser']);
    unset($_SESSION['position']);
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");