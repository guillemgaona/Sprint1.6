<?php

function showInfo() {

    echo "Aquest codi es troba a l'arxiu: " . __FILE__ . "<br>";
    echo "Aquesta línia és la número: " . __LINE__ . "<br>";
    echo "Aquesta és la funcio: " . __FUNCTION__ . "<br>";

}

echo showInfo();
?>