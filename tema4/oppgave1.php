<?php    

$postnr=$_POST ["postnr"];

else if (!$postnr)
{
     print("Postnr er ikke fylt ut");
}

if (strlen($postnr)!=4)
{
    print("Postnr best&aring;r ikke av 4 tegn");
}

if (!ctype_digit($postnr))
{
    print("Postnr ms&aring; være tall");
}

else
{
    print("Postnr er korrekt")
}

?>