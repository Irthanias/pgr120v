<?php

include("db-kobling.php");

$sqlSetning="SELECT student.brukernavn , student.fornavn , student.etternavn , klasse.klassenavn , klasse.klassekode FROM student INNER JOIN klasse ON student.klassekode = klasse.klassekode;";

$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");

$antallRader=mysqli_num_rows($sqlResultat);

print ("<h3>Registrerte klasser</h3>");
print ("<table border=1>");
print ("<tr><th align=left>Brukernavn</th> <th align=left>Fornavn</th> <th align=left>Etternavn</th> <th align=left>Klassenavn</th> <th>Klassekode</th></tr>");

for ($r=1;$r<=$antallRader;$r++)
{
    $rad=mysqli_fetch_array($sqlResultat);
    $brukernavn=$rad[0];
    $fornavn=$rad[1];
    $etternavn=$rad[2];
    $klasseNavn=$rad[3];
    $klasseKode=$rad[4];

    print ("<tr> <td> $brukernavn </td> <td> $fornavn </td> <td> $etternavn </td> <td> $klasseNavn </td> <td> $klasseKode</td> </tr>");
}

print ("</table>");

?>