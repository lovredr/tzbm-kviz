<?php
    // provjera baze
    if ($mysqli -> connect_errno) {
        echo 'Pogreška: ' . $mysqli -> connect_error;
        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'login.php\'">RESTART</span>';
        exit();
    }

    session_start();
    // provjera jel postavljena sesija
    if (!isset($_SESSION['username'], $_SESSION['password'])) { header('Location: login.php'); exit(); }

    $provjera_admin = 0;

    $admins = $mysqli -> query('SELECT * FROM admins');

    // usporeduje iz tablice admin
    while ($row = $admins -> fetch_array()) {
        if (($_SESSION['username'] == $row['username']) &&
            ($_SESSION['password'] == $row['lozinka']))
        {
                $provjera_admin = 1;
        }
    }

    if ($provjera_admin !== 1) { header('Location: login.php?krivo'); exit(); }
?>