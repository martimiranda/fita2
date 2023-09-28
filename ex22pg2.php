<?php
    $quantitat = $_POST["quantitat"];

    echo "Has seleccionat ".$quantitat."<br>";
    for($i = 1; $i <= $quantitat; $i++){
        echo "<a href=\"ex22pg3.php?quan=$i\">Comanda ".$i."</a><br>";
    }
?>