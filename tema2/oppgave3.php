<?php

$svar=$_POST ["svar"];
$svar = strtolower ($svar);
if ($svar == "ja" or $svar == "j")
{
    print("Du har svart ja på sp&oslash;rsm&aring;let om du er student");
}
elseif ($svar == "nei" or $svar == "n")
{
    print("Du har svart nei på sp&oslash;rsm&aring;let om du er student");
}
else
{
    print("Du har ikke svart på sp&oslash;rsm&aring;let om du er student");
}


?>