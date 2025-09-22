<?php  /* registrer-poststed */
/*
/*  Programmet lager et html-skjema for å registrere et poststed
/*  Programmet registrerer data (postnr og poststed) i databasen
*/
?> 

<h3>Registrer Klasse </h3>

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
      $studieKode=$_POST ["studieKode"];

      if (!$klasseKode || !$klasseNavn)
        {
          print ("Klassekode, klassenavn og studiekode kode m&aring; fylles ut");
        }
      else
        {
          include("db-kobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM klasse WHERE klasseKode='$klasseKode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* data er registrert fra før */
            {
              print ("Data er registrert fra f&oslashr");
            }
          else
            {
              $sqlSetning="INSERT INTO klasse VALUES('$klasseKode','$klasseNavn','$studieKode');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende data er n&aring; registrert: $klasseKode, $klasseNavn og $studieKode"); 
            }
        }
    }
?> 