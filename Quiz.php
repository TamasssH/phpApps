<?php

$i = 0;
$beurt = 0;
$random = rand(1, 100);
$stop = (string)readline("typ [ja] om te stoppen en [enter]om te starten met de quiz!\n");
$invoer = readline("Raad een getal tussen de 1 & 100\n");

while ($i<1) {

    if ($invoer == $random) {
        echo "Het antwoord is goed!";
        echo "Je deed er: " . $beurt." beurten over!";
        $i = 1;

        if ($stop == "ja" or $stop == "Ja") {
            $i = 1;
        }

    } else if ($invoer != $random) {
        echo "Het is helaas niet goed!\n";
        $beurt++;
        if ($invoer > $random) {
            echo "Het getal is lager!\n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n");
        }
        if ($invoer < $random) {
            echo "Het getal is hoger!\n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n");
        }
        $stop = (string)readline("typ [ja] om te stoppen, [enter] om door te gaan.\n");
        if ($stop == "ja" or $stop == "Ja") {
            $i = 1;
        }
        

    }

}

?>