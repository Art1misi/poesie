<html>
<head>
<style>
body{
font-size:20px;
text-align: center;
background-color: lightblue;
}
</style>
</head>
<body>
<?php 

$myfile=fopen("utenti.txt", "a+");

$txt=$_POST["email"]."    utente     ".$_POST["name"];

fwrite($myfile, $txt);

fclose($myfile);


  echo $utente." Grazie per esserti registrato per ricevere gli aggiornamenti relativi alle mie pubblicazioni!   ";
 ?> 

</body>
</html>
