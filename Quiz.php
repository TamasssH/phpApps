<?php

//Wat variabelen
$i = 0;
$beurt = 1;
$random = rand(1, 100);


//Een keuze om te stoppen of beginnen.
$stop = (string)readline("typ [stop] om te stoppen en [enter]om te starten met de quiz!\n");
if ($stop == "stop" or $stop == "Stop") {
    exit("\e[01;31mDe quiz is gestopt!\e[0m \n \e[01;31mJe hebt stop getypt, of je hebt een getal kleiner dan 0 of groter dan 100 ingevult!\e[0m");
}

//Het begin van de quiz + de invoer
$invoer = readline("De quiz is gestart! Raad een getal tussen de 1 & 100\n");

//De loop zodat je opnieuw kunt gokken.
while ($i<1) {

    //Als je de invoer goed is gegokt.
    if ($invoer == $random) {
        echo "\e[0;32mHet antwoord is goed!\e[0m\n";
        echo "Je deed er: " .$beurt." beurt/beurten over!\n\n";
        $i = 1;
    } 

    //Een keuze om te stoppen.
    if ($stop == "stop" or $stop == "Stop") {
        exit("\e[01;31mDe quiz is gestopt!\e[0m \n \e[01;31mJe hebt stop getypt, of je hebt een getal kleiner dan 0 of groter dan 100 ingevult!\e[0m");
        
    }

    //Een check voor als je een te groot of te klein getal invult.
    if ($invoer > 100 or $invoer < 1)  {
        exit("\e[01;31mDe quiz is gestopt!\e[0m \n\e[01;31m Je hebt stop getypt, of je hebt een getal kleiner dan 0 of groter dan 100 ingevult!\e[0m");
    }

    //Als de invoer niet goed gegokt is.
    if ($invoer != $random) {
        echo "\e[01;31mHet is helaas niet goed!\e[0m \n";
        $beurt++;

        //De twee if statements om te checken welke hint gegeven moet worden.
        if ($invoer > $random) {
            echo "\e[01;31mHet getal is lager!\e[0m \n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n");
            
        } 
        if ($invoer < $random) {
            echo "\e[01;31mHet getal is hoger!\e[0m \n";
            $invoer = readline("Raad nog eens een getal tussen de 1 & 100\n");
        }
    }

}

?>