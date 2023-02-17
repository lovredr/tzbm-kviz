<?php

    //provjera tocnosti konacnog
    if ($konacno_slovo == $tocno_slovo) {
        $mysqli -> query("UPDATE $provjera
                          SET bodovi = 1
                          WHERE provjera_id = $zadnja_povjera_id");
        $_SESSION["tocno"]++;
    }
    else {
        $mysqli -> query("UPDATE $provjera
                          SET bodovi = -1
                          WHERE provjera_id = $zadnja_povjera_id");
    }

    if ($broj_pitanja == 10) {
        //zaustavit timer, dodaje se jedan jer toliko traje animacija
        $_SESSION["konacnovrijeme"] = $proteklo_vrijeme + 1;
        
        if ($_SESSION["tocno"] == 10) {
            echo '<h2 id="gg" class="next" onclick="location=\'kraj.php?gg\'">GG</h2>';
        }
        else {
            echo '<h2 class="next" onclick="location=\'kraj.php\'">Kraj</h2>';
        }
    }

    else {
        echo '<h2 class="next" onclick="location=\'kviz.php\'">Dalje</h2>';
    }
?>