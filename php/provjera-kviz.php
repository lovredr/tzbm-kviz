<?php

    // provjera baze

    if ($mysqli -> connect_errno) {

        echo 'Pogreška: ' . $mysqli -> connect_error;

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'kviz.php\'">REFRESH</span>';

        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'index.php\'">RESTART</span>';

        exit();

    } 



    session_start();



    // provjera sesije

    if (!isset($_SESSION["provjera"])) { header('Location: index.php'); exit(); }



    // stvaranje privremene tablice za provjeru

    $provjera = $_SESSION["provjera"];



    // provjera tablice

    if (!$mysqli -> query("SELECT * FROM $provjera")) {



        $mysqli -> query("CREATE TABLE $provjera (

                          provjera_id int(11) NOT NULL auto_increment, 

                          pitanje_id int(11) NOT NULL default 0,

                          bodovi int(11) NOT NULL default 0,

                          PRIMARY KEY (provjera_id))");

    }





    // provjera ima li redaka

    $broj_pitanja = $mysqli -> query("SELECT * FROM $provjera") -> num_rows;





    // postavljanje timera

    if ($broj_pitanja == 0) {

        $_SESSION["pocetnovrijeme"] = time();

    }

    $proteklo_vrijeme = time() - $_SESSION["pocetnovrijeme"];

?>