<?php    /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  $NOK=$_POST ["NOK"];
  $CLP=$_POST ["CLP"];

  $kurs=95.41;
  if($NOK){
    $CLPr=$NOK*$kurs;
    print("$NOK NOK er lik $CLPr CLP <br/>") ;
  }
  if($CLP){
    $NOKr=$CLP/$kurs;
    print("$CLP CLP er lik $NOKr NOK") ;
  }
	
  
?>