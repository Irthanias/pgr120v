<?php  /* slett-poststed */
/*
/*  Programmet lager et skjema for å velge et poststed som skal slettes  
/*  Programmet sletter det valgte poststedet
*/
?> 

<script src="function.js"> </script>

<h3>Slett Student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
  Klassekode 
  <select name="brukernavn" id="brukernavn">
    <option value="">velg brukernavn</option>
    <?php include("function.php"); listeBruker(); ?> 
  </select>  <br/>
  <input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettStudentKnapp"]))
    {
      $brukernavn=$_POST ["brukernavn"];
      $klasseKode=$POST ["klassekode"];	  
	  
      if (!$brukernavn)
        {
          print ("Det er ikke valgt noe student brukernavn"); 

        }
      else
        {	  		 
          include("db-kobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
	
          $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
          mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
            /* SQL-setning sendt til database-serveren */
		
          print ("F&oslash;lgende klasse er n&aring; slettet: $brukernavn  $klasseKode.<br />");
        }	
    }
?> 