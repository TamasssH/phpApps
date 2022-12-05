<?php

$naam = readline("Geef jouw naam: ");
$leeftijd = readline("Geef je leeftijd: ");
$leeftijdCheck = 21;
echo "Hallo $naam \n";

if ($leeftijd < $leeftijdCheck) {
    echo "jij bent jonger dan $leeftijdCheck jaar.\n";
}
if ($leeftijd > $leeftijdCheck) {
    echo "jij bent ouder dan $leeftijdCheck jaar.\n";
}
if ($leeftijd == $leeftijdCheck) {
    echo "jij bent precies $leeftijdCheck jaar oud.\n";
}

?>
