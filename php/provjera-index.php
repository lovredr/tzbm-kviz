<?php

    // provjera baze

    if ($mysqli -> connect_errno) {

        echo 'Pogreška: ' . $mysqli -> connect_error;

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'index.php\'">REFRESH</span>';

        exit();

    }



    session_start();



    // brisanje stare tablice ako postoji

    if (isset($_SESSION["provjera"])) {

        $provjera = $_SESSION["provjera"];

        $mysqli -> query("DROP TABLE IF EXISTS $provjera");

    }



    // brise login ako postoji

    session_destroy();

    session_start();

    $_SESSION["provjera"] = 'provjera' . random_int(10000, 99999) . time();

    $_SESSION["tocno"] = 0;



    $mysqli -> close();

?>