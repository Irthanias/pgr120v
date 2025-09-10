<?php

$svar=$_POST ["svar"];

if ($svar == "ja" or $svar == "j" or $svar == "JA" or $svar == "J" or $svar == "Ja")
{
    print("Du har svart ja på sp&oslash;rsm&aring;let om du er student");
}
elseif ($svar == "nei" or $svar == "n" or $svar == "NEI" or $svar == "N" or $svar == "Nei")
{
    print("Du har svart nei på sp&oslash;rsm&aring;let om du er student");
}
else
{
    print("Du har ikke svart på sp&oslash;rsm&aring;let om du er student");
}


?>