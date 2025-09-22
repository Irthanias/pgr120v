<?php
?>

<form method="post" action="" id="registrerKlasseSkjema" name="registrerKlasseSkjema">
  Klassekode <input type="text" id="klasseKode" name="klasseKode" required /> <br/>
  Klassenavn <input type="text" id="klasseNavn" name="klasseNavn" required /> <br/>
  Studiekode <input type="text" id="studieKode" name="studieKode" required /> <br/>
  <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>


<?php
  if (isset($_POST ["registrerKlasseKnapp"]))
    {
      $klasseKode=$_POST ["klasseKode"];
      $klasseNavn=$_POST ["klasseNavn"];
      $studiumKode=$_POST ["studiumKode"];
    }

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
    $klasseKode=$rad["klassekode"];
    $klasseNavn=$rad["klassenavn"];
    $studiumKode=$rad["studiumkode"];

    print ("<tr> <td> $klasseKode </td> <td> $klasseNavn </td> <td> $studiumKode </td> </tr>");
}

print ("</table>");

?>