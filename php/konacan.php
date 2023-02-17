<?php
    // provjera je li uneseno sve
    if (!isset($_POST['konacno-slovo'],
               $_POST['a'],
               $_POST['b'],
               $_POST['c'],
               $_POST['d']))
    {
        header('Location: kviz.php');
        exit();
    }

    $konacno_slovo = $_POST['konacno-slovo'];
            
    // provjera je li pravilno konacno slovo
    if (!preg_match('/^[abcd]$/', $konacno_slovo)) { header('Location: kviz.php'); exit(); }

    // dohvacanje pitanja
    $pitanje_id = $mysqli -> query("SELECT pitanje_id
                                    FROM $provjera
                                    WHERE provjera_id = $zadnja_povjera_id") -> fetch_array()['pitanje_id'];

    $pitanje = $mysqli -> query("SELECT tekst_pitanja, tocno
                                 FROM pitanja
                                 WHERE pitanje_id = $pitanje_id") -> fetch_array();

    $tekst_pitanja = $pitanje['tekst_pitanja'];
    $tocno = $pitanje['tocno'];

    // provjera tocnosti svih odgovora
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    if ($a == $tocno) { $tocno_slovo = 'a'; }
    else if ($b == $tocno) { $tocno_slovo = 'b'; }
    else if ($c == $tocno) { $tocno_slovo = 'c'; }
    else if ($d == $tocno) { $tocno_slovo = 'd'; }
    else { header('Location: kviz.php'); exit(); }
?>