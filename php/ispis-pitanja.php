<?php
    $pitanja = $mysqli -> query('SELECT * FROM pitanja');

    while ($row = $pitanja -> fetch_array()) {

        $pitanje_id = $row['pitanje_id'];
        $tekst_pitanja = $row['tekst_pitanja'];
        $tocno = $row['tocno'];
        $krivo1 = $row['krivo1'];
        $krivo2 = $row['krivo2'];
        $krivo3 = $row['krivo3'];
        echo "<table>	
                <tr>
                    <td colspan='2'>$tekst_pitanja</td>
                </tr>
                
                <tr>
                    <td width='50%' class='tocno'>$tocno</td>
                    <td width='50%'>$krivo1</td>
                </tr>

                <tr>
                    <td width='50%'>$krivo2</td>
                    <td width='50%'>$krivo3</td>
                </tr>
            </table>";
        echo "<a href='admin.php?izbrisi=$pitanje_id'>IZBRIŠI</a>";
        echo '<hr>';
    }
?>