<?php  /* slett-poststed */
/*
/*  Programmet lager et skjema for å velge et poststed som skal slettes  
/*  Programmet sletter det valgte poststedet
*/
?> 

<script src="function.js"> </script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
  Klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
  <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 

<?php

$sqlSetning="SELECT klassekode FROM klasse ORDER BY klassekode";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");

while(
    $rad=mysqli_fetch_row($sqlResultat)
)
{
  
    $klasseKode=$rad[0];
    print("<option value=\"$klasseKode\">$klasseKode</option>");
}
?>
</select>
</br>
    <input type="submit" value="Slett Klasse" id="slettStudentKnapp" name="slettStudentKnapp" />
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br/>

</form>
<?php
  if (isset($_POST ["slettKlasseKnapp"]))
    {	
      $klasseKode=$_POST ["klassekode"];
	  
	  if (!$klasseKode)
        {
          print ("Klassekode m&aring; fylles ut");
        }
      else
        {
          include("db-kobling.php");  
          $sqlSetning="SELECT * FROM klasse WHERE klassekode='$klasseKode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader==0)  /* poststedet er ikke registrert */
            {
              print ("Klassekoden finnes ikke");
            }
          else
            {	  
              $sqlSetning="DELETE FROM klasse WHERE klassekode='$klasseKode';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
                /* SQL-setning sendt til database-serveren */
		
              print ("F&oslash;lgende klasse er n&aring; slettet: $klasseKode  <br />");
            }
        }
    }
?> 