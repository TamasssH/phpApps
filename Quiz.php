<?php

//Wat variabelen
$i = 0;
$beurt = 1;
$random = rand(1, 100);

//Een keuze om te stoppen of beginnen.
echo "typ [stop] om te stoppen en [enter] om te starten met de quiz!";
$invoer = readline();
if ($invoer == "stop" or $invoer == "Stop") {
    echo "De quiz is gestopt!"; exit();
}
echo "De quiz is gestart! Raad een getal tussen de 1 & 100";
$invoer = readline("\n");

//De loop zodat je opnieuw kunt gokken.
while ($i<1) {
    //Als je de invoer goed is gegokt.
    if ($invoer == $random) {
        echo "Het antwoord is goed!";
        echo " Je deed er: " .$beurt." beurt(en) over!\n\n";
        exit("\n");
    } 
    //Een keuze om te stoppen.
    if ($invoer == "stop" or $invoer == "Stop") {
        echo "De quiz is gestopt!"; 
        exit("\n");
    }
    //Een check voor als je een te groot of te klein getal invult.
    if ($invoer > 100 or $invoer < 1)  {
        echo "De quiz is gestopt! Je hebt een getal kleiner dan 1 of groter dan 100 ingevuld!"; 
        exit("\n");
    }
    //Als de invoer niet goed gegokt is.
    //De twee if statements om te checken welke hint gegeven moet worden.
    if ($invoer > $random) {
        $beurt++;
        echo "Het is helaas niet goed! Het getal is lager! \n";
        echo "Raad nog eens een getal tussen de 1 & 100";
        $invoer = readline("\n");       
    } 
    if ($invoer < $random) {
        $beurt++;
        echo "Het is helaas niet goed! Het getal is hoger! \n";
        echo "Raad nog eens een getal tussen de 1 & 100";
        $invoer = readline("\n");
    }
}
?>