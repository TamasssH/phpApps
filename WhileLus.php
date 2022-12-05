<?php

$teller = 8;
$maximum = 10;
$tekst = "Hello,World!";

echo "de teller is voor de while lus: ".$teller."\n";

while ($teller <= $maximum) {
    echo "$tekst";
    $teller++;
}

echo "teller is na de while lus: ".$teller."\n";

?>