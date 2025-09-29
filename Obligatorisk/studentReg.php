<?php  /* registrer-poststed */
/*
/*  Programmet lager et html-skjema for å registrere et poststed
/*  Programmet registrerer data (postnr og poststed) i databasen
*/
include("db-kobling.php");
?> 

<h3>Registrer Student </h3>

<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
  Brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
  Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
  Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
  <!--Klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>-->
  Klasse<select id="klassekode" name="klassekode" required>
<?php
$sqlSetning="SELECT klassekode, klassenavn FROM klasse ORDER BY klassekode";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");

while(
    $rad=mysqli_fetch_row($sqlResultat)
)
{
  
    $klasseKode=$rad[0];
    $klasseNavn=$rad[1];
    print("<option value=\"$klasseKode\">$klasseNavn</option>");
}
?>

</select>
<br/>

  <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["registrerStudentKnapp"]))
    {
      $brukernavn=$_POST ["brukernavn"];
      $fornavn=$_POST ["fornavn"];
      $etternavn=$_POST ["etternavn"];
      $klasseKode=$_POST ["klassekode"];

      if (! ($brukernavn && $fornavn && $etternavn && $klasseKode)) 
        {
          print ("Brukernavn, fornavn, etternavn og klassekode m&aring; fylles ut");
        }
      else
        {
            /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* data er registrert fra før */
            {
              print ("Student $brukernavn er registrert fra f&oslashr");
            }
          else
            {
              $sqlSetning="INSERT INTO student VALUES('$brukernavn','$fornavn','$etternavn','$klasseKode');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende data er n&aring; registrert: $brukernavn, $fornavn, $etternavn og $klasseKode"); 
            }
        }
    }
?> 