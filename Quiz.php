<?php

//Wat variabelen
$i = 0;
$beurt = 1;
$random = rand(1, 100);

//Een keuze om te stoppen of beginnen.
echo "typ \e[01;31m[stop]\e[0m om te stoppen en \e[01;32m[enter]\e[0m om te starten met de quiz!";
$stop = readline();
if ($stop == "stop" or $stop == "Stop") {
    echo "\e[01;31mDe quiz is gestopt!\e[0m"; exit("\n");
}
//Het begin van de quiz + de invoer
echo "\e[0;33mDe quiz is gestart! Raad een getal tussen de 1 & 100\e[0m";
$invoer = readline("\n");

//De loop zodat je opnieuw kunt gokken.
while ($i<1) {

    //Als je de invoer goed is gegokt.
    if ($invoer == $random) {
        echo "\e[0;32mHet antwoord is goed!\e[0m\n";
        echo "Je deed er: " .$beurt." beurt(en) over!\n\n";
        exit("\n");
    } 
    //Een keuze om te stoppen.
    if ($stop == "stop" or $stop == "Stop") {
        echo "\e[01;31mDe quiz is gestopt!\e[0m"; exit("\n");
    }
    //Een check voor als je een te groot of te klein getal invult.
    if ($invoer > 100 or $invoer < 1)  {
        echo "\e[01;31mDe quiz is gestopt! Je hebt een getal kleiner dan 1 of groter dan 100 ingevuld!\e[0m"; exit("\n");
    }
    //Als de invoer niet goed gegokt is.
    //De twee if statements om te checken welke hint gegeven moet worden.
    if ($invoer > $random) {
        $beurt++;
        echo "\e[01;31mHet is helaas niet goed! Het getal is lager!\e[0m \n";
        echo "\e[0;33mRaad nog eens een getal tussen de 1 & 100\e[0m";
        $invoer = readline("\n");
            
    } 
    if ($invoer < $random) {
        $beurt++;
        echo "\e[01;31mHet is helaas niet goed! Het getal is hoger!\e[0m \n";
        echo "\e[0;33mRaad nog eens een getal tussen de 1 & 100\e[0m";
        $invoer = readline("\n");
    }
}



?>