<?php  /* slett-poststed */
/*
/*  Programmet lager et skjema for å velge et poststed som skal slettes  
/*  Programmet sletter det valgte poststedet
*/
?> 

<script src="function.js"> </script>

<h3>Slett Klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
  Klassekode 
  <select name="klassekode" id="klassekode">
    <option value="">velg klassekode</option>
    <?php include("function.php"); listeKlasse(); ?> 
  </select>  <br/>
  <input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettKlasseKnapp"])) {
      $klasseKode=$_POST ["klassekode"];	  
	  
      if (!$klasseKode)
        {
          print ("Det er ikke valgt noe klassekode"); 

        }
      else
        {	  		 
          include("db-kobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

	      $sqlSetning="SELECT * FROM klasse WHERE klassekode='$klasseKode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("Det er ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* data er registrert fra før */
            {
              print ("Klasse med klassekode $klasseKode er ikke tom");
            }
          else{
          $sqlSetning="DELETE FROM klasse WHERE klassekode='$klasseKode';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            /* SQL-setning sendt til database-serveren */
		
          print ("F&oslash;lgende klasse er n&aring; slettet: $klasseKode  <br />");
        }	
    }
}
?> 
