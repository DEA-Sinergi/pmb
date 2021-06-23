<?php
    session_start();
    $_SESSION['status'] = '';
    unset($_SESSION['status']);
    session_unset();
    session_destroy();
    header("Location: ../index.php");
?>