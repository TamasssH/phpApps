<?php
//Wat variabelen
$i = 0;
$beurt = 0;
$random = rand(1, 100);

//Een keuze om te stoppen of beginnen.
$stop = (string)readline("typ [stop] om te stoppen en [enter]om te starten met de quiz!\n");
if ($stop == "stop" or $stop == "Stop") {
    exit("De quiz is gestop!\n");
}

//Het begin van de quiz + de invoer
$invoer = readline("De quiz is gestart! Raad een getal tussen de 1 & 100\n");

//De loop zodat je opnieuw kunt gokken.
while ($i<1) {

    //Als je de invoer goed is gegokt.
    if ($invoer == $random) {
        echo "Het antwoord is goed!\n\n";
        echo "Je deed er: " .$beurt." beurt/beurten over!\n\n";
        $i = 1;
    } 

    //Een keuze om te stoppen.
    if ($stop == "stop" or $stop == "Stop") {
        exit("De quiz is gestop!\n");
        
    }

    //Een check voor als je een te groot of te klein getal invult.
    if ($invoer > 100 or $invoer < 0) {
        echo "Je kan een getal invullen die kleiner is dan 0 en groter is dan 100!\n";
        exit("De quiz is gestop!\n");
    }

    //Als de invoer niet goed gegokt is.
    if ($invoer != $random) {
        echo "Het is helaas niet goed!\n";
        $beurt++;

        //De twee if statements om te checken welke hint gegeven moet worden.
        if ($invoer > $random) {
            echo "Het getal is lager!\n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n");
            
        } 
        if ($invoer < $random) {
            echo "Het getal is hoger!\n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n");
        }
    }

}

?>