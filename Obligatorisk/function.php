<?php  /*  dynamiske funksjoner */
/*
/*  denne filen inneholder følgende dynamiske funksjoner:
/*    listeboksPostnr()
/*    sjekkbokserPostnr()
*/


function listeKlasse()
{
  include("db-kobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM klasse ORDER BY klassekode;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
    /* SQL-setning sendt til database-serveren */
	
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $klasseKode=$rad["klassekode"]; 
      $klasseNavn=$rad["klassenavn"];

      print("<option value='$klasseKode'>$klasseKode $klasseNavn</option>");  /* ny verdi i listeboksen laget */
    }
}



function listeBruker()
{
  include("db-kobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM student ORDER BY brukernavn;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
    /* SQL-setning sendt til database-serveren */
	
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $brukernavn=$rad["brukernavn"]; 
      $klasseKode=$rad["klassekode"];

      print("<option value='$brukernavn'>$brukernavn $klasseKode</option>");  /* ny verdi i listeboksen laget */
    }
}
?>