<?php
    session_start();
    unset($_SESSION['admin']);
    header('Location: ../../Front-end/index.php');
?>