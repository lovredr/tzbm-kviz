<?php

    if ($broj_pitanja != 0) {
        $zadnja_povjera_id = $mysqli -> query("SELECT MAX(provjera_id)
                                               AS provjera_zadnja
                                               FROM $provjera") -> fetch_array()['provjera_zadnja'];
    
        $zadnje = $mysqli -> query("SELECT pitanje_id, bodovi 
                                    FROM $provjera
                                    WHERE provjera_id = $zadnja_povjera_id") -> fetch_array();

        $zadnje_pitanje_id = $zadnje['pitanje_id'];
        $zadnji_bodovi = $zadnje['bodovi'];
    }
    else { $zadnji_bodovi = 1; }
    
    
    // provjera refresh
    if ($zadnji_bodovi == 0) {
            
        $sql = "SELECT *
                FROM pitanja
                WHERE pitanje_id = $zadnje_pitanje_id";
        $row = $mysqli -> query($sql) -> fetch_array();

        $odgovor = array($row['tocno'], $row['krivo1'], $row['krivo2'], $row['krivo3']);
        shuffle($odgovor);  
    }

    else {

        if ($broj_pitanja == 10) { header('Location: kraj.php'); exit(); }

        // nasumicni odabir pitanja
        $sql = "SELECT *
                FROM pitanja
                WHERE pitanje_id
                NOT IN (SELECT pitanje_id
                        FROM $provjera)
                ORDER BY RAND()
                LIMIT 1";
        $row = $mysqli -> query($sql) -> fetch_array();

        // dodavanje pitanje_id u tablicu da se ne ponavlja
        $pitanje_id = $row['pitanje_id'];
        $mysqli->query("INSERT INTO $provjera (pitanje_id)
                        VALUES ($pitanje_id)");

        $odgovor = array($row['tocno'], $row['krivo1'], $row['krivo2'], $row['krivo3']);
        shuffle($odgovor);
        
        // da prikaz bude tocan
        $broj_pitanja++;
    }
?>