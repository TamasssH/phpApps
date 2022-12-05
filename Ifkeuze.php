<?php

$naam = readline("Geef jouw naam: ");
$leeftijd = readline("Geef je leeftijd: ");
$leeftijdCheck = 25;
echo "Hallo $naam \n";

if ($leeftijd < $leeftijdCheck) {
    echo "jij bent jonger dan 25 jaar.\n";
}
if ($leeftijd > $leeftijdCheck) {
    echo "jij bent ouder dan 25 jaar.\n";
}
if ($leeftijd == $leeftijdCheck) {
    echo "jij bent precies 25 jaar oud.\n";
}

?>
