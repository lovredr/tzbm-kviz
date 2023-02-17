<?php
    // brise prijasnje sesije
    session_start();
    session_destroy();
    

    if (isset($_POST['unesi'])) {

        session_start();

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        header('Location: admin.php');
    }
?>