<?php

include("db-kobling.php");

$sqlSetning="SELECT * FROM klasse;";

$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);

print ("<h3>Registrerte klasser</h3>");
print ("<table border=1>");
print ("<tr><th align=left>Klassekode</th> <th align=left>Klassenavn</th> <th align=left>Studiekode</th></tr>");

for ($r=1;$r<=$antallRader;$r++)
{
    $rad=mysqli_fetch_array($sqlResultat);
    var_dump($rad);
    $klasseKode=$rad["klassekode"];
    $klasseNavn=$rad["klasssenavn"];
    $studiumKode=$rad["studiumkode"];

    print ("<tr> <td> $klasseKode </td> <td> $klasseNavn </td> <td> $studiumKode </td> </tr>");
}

print ("</table>");

?>