<?php

    // provjera baze

    if ($mysqli -> connect_errno) {

        echo 'Pogreška: ' . $mysqli -> connect_error;

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'kviz-odgovor.php\'">REFRESH</span>';

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'index.php\'">RESTART</span>';

        exit();

    } 



    session_start();



    // provjera sesije

    if (!isset($_SESSION["provjera"])) { header('Location: index.php'); exit(); }



    // provjera tablice

    $provjera = $_SESSION["provjera"];



    if (!$mysqli -> query("SELECT * FROM $provjera")) { header('Location: kviz.php'); exit(); }



    // provjera refresh

    $zadnja_povjera_id = $mysqli -> query("SELECT MAX(provjera_id)

                                        AS provjera_zadnja

                                        FROM $provjera") -> fetch_array()['provjera_zadnja'];



    $zadnji_bodovi = $mysqli -> query("SELECT bodovi

                                       FROM $provjera

                                       WHERE provjera_id = $zadnja_povjera_id") -> fetch_array()['bodovi'];



    if ($zadnji_bodovi != 0) { header('Location: kviz.php'); exit(); }



    // provjera redaka

    $broj_pitanja = $mysqli -> query("SELECT * FROM $provjera") -> num_rows;





    // postavljanje timera

    $proteklo_vrijeme = time() - $_SESSION["pocetnovrijeme"];

?>