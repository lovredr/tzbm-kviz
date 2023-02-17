<?php
    if (isset($_POST['dodaj'])) {
        
        $novo_tekst_pitanja = $_POST['tekst-pitanja'];
        $novo_tocno = $_POST['tocno-odg'];
        $novo_krivo1 = $_POST['krivo1-odg'];
        $novo_krivo2 = $_POST['krivo2-odg'];
        $novo_krivo3 = $_POST['krivo3-odg'];

        $mysqli -> query("INSERT INTO pitanja (tekst_pitanja, tocno, krivo1, krivo2, krivo3)
                          VALUES ('$novo_tekst_pitanja', '$novo_tocno', '$novo_krivo1', '$novo_krivo2', '$novo_krivo3')");
    }

    if (isset($_GET['izbrisi'])) {
        $brisi_pitanje_id = $_GET['izbrisi'];
        $mysqli -> query("DELETE FROM pitanja WHERE pitanje_id = $brisi_pitanje_id");
    }
?>