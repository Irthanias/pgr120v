<?php

$svar=$_POST ["svar"];

if ($svar == "ja" or $svar == "j" or $svar == "JA" or $svar == "J" or $svar == "Ja")
{
    print("Du har svart ja på sp&oslash;rsm&aring;let om du er student");
}
elseif ($svar == "nei")
{
    print("$svar, du er ikke student");
}
else
{
    print("Skriv gyldig svar");
}


?>