<?php
    $pozicija = 1;

    $sql = 'SELECT *
            FROM igraci
            ORDER BY
            bodovi DESC,
            vrijeme ASC,
            igrac_id ASC';

    $result = $mysqli -> query($sql);

    while ($row = $result -> fetch_array()) {
        
        $poredak_ime = $row['ime'];
        $poredak_bodovi = $row['bodovi'];
        $poredak_vrijeme = $row['vrijeme'];

        // postavljanje vremena u mm:ss format
        $poredak_vrijeme_m = floor($poredak_vrijeme / 60);
        if ($poredak_vrijeme_m < 10) {
            $poredak_vrijeme_m = '0'.$poredak_vrijeme_m;
        }
        $poredak_vrijeme_s = $poredak_vrijeme % 60;
        if ($poredak_vrijeme_s < 10) {
            $poredak_vrijeme_s = '0'.$poredak_vrijeme_s;
        }
        

        if ($row['igrac_id'] == $trenutni_id){
            echo '<tr id="igrac">';
        }
        else {
            echo '<tr>';
        }
        
        echo "<td>$pozicija</td>
              <td>$poredak_ime</td>
              <td>$poredak_vrijeme_m"."m $poredak_vrijeme_s"."s</td>
              <td>$poredak_bodovi</td>
              </tr>";
        
        $pozicija++;
    }
?>