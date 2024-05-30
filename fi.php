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
//$file=$_POST["name"].$_POST["email"];

 

/*if (file_exist("$nfile.txt"))  { 
 
 echo "l'utente  ha gia un account registrato! se si vuole cancellare l'utente premere Reset "; 

}else{*
if($myfile = fopen("utente1.txt", "x+")){
	echo "fatto";
}else{
echo "gia esistente";
}
fclose($myfile);*/
$myfile=fopen("utenti.txt", "a+");

$txt=$_POST["email"]."    utente     ".$_POST["name"];

fwrite($myfile, $txt);
/*echo readfile("utenti.txt");*/
fclose($myfile);


  echo $utente." Grazie per esserti registrato per ricevere gli aggiornamenti relativi alle mie pubblicazioni!   ";
 ?> 

</body>
</html>
