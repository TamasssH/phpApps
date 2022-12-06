<?php

$i = 0;
$beurt = 0;
$random = rand(1, 100);

$stop = (string)readline("typ [stop] om te stoppen en [enter]om te starten met de quiz!\n");
if ($stop == "stop" or $stop == "Stop") {
    exit("Je hebt de quiz gestopt!");
}

$invoer = readline("De quiz is gestart! Raad een getal tussen de 1 & 100\n");

while ($i<1) {

    //Als je de invoer goed is gegokt.
    if ($invoer == $random) {
        echo "Het antwoord is goed!\n\n";
        echo "Je deed er: " .$beurt." beurt/beurten over!\n\n";
        $i = 1;
    } 

    //Een check voor als je een te groot of te klein getal invult.
    if ($invoer > 100 or $invoer < 0) {
        exit("De quiz is gestopt! Je kan niet een getal invullen die hoger is dan 100 of lager dan 0!\n\n");
    }

    //Als de invoer niet goed gegokt is.
    if ($invoer != $random) {
        echo "Het is helaas niet goed!\n\n";
        $beurt++;

        //De twee if statements om te checken welke hint gegeven moet worden.
        if ($invoer > $random) {
            echo "Het getal is lager!\n\n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n\n");
            
        } 
        if ($invoer < $random) {
            echo "Het getal is hoger!\n\n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n\n");
        }

        $stop = (string)readline("typ [Stop] om te stoppen, [enter] om door te gaan.\n\n");
        if ($stop == "stop" or $stop == "Stop") {
            $i = 1;
        }
        

    }

}

?>