<?php    

$klassekode=$_POST ["klassekode"];


  if (!$klassekode)  /* klassekode er ikke fylt ut */
    {
      print("Klassekode er ikke fylt ut <br />");
    }
  else if (strlen($klassekode)!=3)  /* klassekode består ikke av 3 tegn */
    {
      
      print("Klassekode best&aring;r ikke av 3 tegn <br />");
    }
  else
    {
      $tegn1=$klassekode[0];   /* første tegn i klassekoden  */
      $tegn2=$klassekode[1];   /* andre tegn i klassekoden  */
      $tegn3=$klassekode[2];   /* tredje tegn i klassekoden  */

      if (!ctype_alpha($tegn1))  /* tegn1 er ikke bokstav */ 
        {
          
          print("F&oslash;rste tegn er ikke en bokstav <br />");
        }
		
      if (!ctype_alpha($tegn2))  /* tegn2 er ikke bokstav */
        {
          
          print("Andre tegn er ikke en bokstav <br />");
        }
		
      if (!ctype_digit($tegn3))  /* tegn3 er ikke et siffer */ 
        {
          $lovligKlassekode=false;
          print("Siste tegn er ikke et siffer  <br />");
        }
    }

  else
    {
      print("Klassekode er korrekt fylt ut <br />");
    }

?>