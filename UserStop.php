<?php

$stop = "nee";
$teller = 1;

while ($stop == "nee") {
    echo "teller is nu: $teller\n";

    $stop = readline("Wil je stoppen? [ja/nee] : ");
    $teller++;
}

?>