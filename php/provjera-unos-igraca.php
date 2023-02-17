<?php
    // provjera baze
    if ($mysqli -> connect_errno) {
        echo 'Pogreška: ' . $mysqli -> connect_error;
        echo '<br><span style="cursor:pointer;color:orange" onclick="location=\'poredak.php\'">REFRESH</span>';
        exit();
    }

    session_start();

    //provjera unosa
    if (isset($_POST['ime'],
              $_SESSION["konacnovrijeme"],
              $_SESSION["tocno"])) {

        $ime = $_POST['ime'];

        // provjera je li ime dobro uneseno
        if (!preg_match('/^[\w]{3,10}$/', $ime)) { header('Location: kraj.php'); exit(); }

        // ako je postavljeno konacno vrijeme odgovoreno je svih 10 pitanja
        $vrijeme = $_SESSION["konacnovrijeme"];

        $broj_tocnih = $_SESSION["tocno"];

        $mysqli -> query("INSERT INTO igraci (ime, vrijeme, bodovi)
                            VALUES ('$ime', $vrijeme, $broj_tocnih)");
            

        $zadnji_igrac_id = $mysqli -> query('SELECT MAX(igrac_id)
                                             AS zadnji_igrac
                                             FROM igraci') -> fetch_array()['zadnji_igrac'];
            
    }

    // brisanje stare tablice ako postoji
    if (isset($_SESSION["provjera"])) {
        $provjera = $_SESSION["provjera"];
        $mysqli -> query("DROP TABLE IF EXISTS $provjera");
    }

    // brise login ako postoji
    session_destroy();
    session_start();
    // da se moze pokrenit kviz iz poretka
    $_SESSION["provjera"] = 'provjera' . random_int(10000, 99999) . time();
    $_SESSION["tocno"] = 0;


    // da mozemo oznacit trenutnog igraca
    if (isset($zadnji_igrac_id)) {
        $trenutni_id = $zadnji_igrac_id;
    }
    else {
        $trenutni_id = '';
    }
?>