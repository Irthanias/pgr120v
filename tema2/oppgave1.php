<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method="POST" action="tema2/oppgave1.php" id="oppgave1" name="oppgave1">
    Hva er 3 ganger 3? <input type="text" id="svar" name="svar" required /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />

    <div>
<?php
if (isset($_POST ["fortsett"]))
{
$svar=$_POST ["svar"];

if ($svar == 9)
{
    print("Riktig. 3 ganger 3 er 9");
}
else
{
    print("$svar er Feil. Prøv igjen");
}
}
?>
</div>
</body>
</html>
