<?php

$svar=$_POST ["svar"];

if ($svar == "ja")
{
    print("$svar, du er student");
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