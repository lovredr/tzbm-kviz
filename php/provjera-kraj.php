<?php

    // provjera baze

    if ($mysqli -> connect_errno) {

        echo 'Pogreška: ' . $mysqli -> connect_error;

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'kraj.php\'">REFRESH</span>';

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'index.php\'">RESTART</span>';

        exit();

    }



    session_start();



    // provjera sesije

    if (!isset($_SESSION["provjera"])) { header('Location: index.php'); exit(); }



    // provjera tablice

    $provjera = $_SESSION["provjera"];



    if (!$mysqli -> query("SELECT * FROM $provjera")) { header('Location: index.php'); exit(); }



    // provjera ima li redaka

    $broj_pitanja = $mysqli -> query("SELECT * FROM $provjera") -> num_rows;



    if ($broj_pitanja < 10) { header('Location: kviz.php'); exit(); }



    $mysqli -> close();

?>