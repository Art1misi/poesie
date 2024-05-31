<!DOCTYPE html>

<html>
<head>
<title>form1 backend</title>
<style>
 body{background-color:lightblue;}
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php require "prova.php"; ?>


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post"  action="fi.php">  

 UserName: <input type="text" name="name" value="<?php if (empty($_POST["name"])) { echo " "; }else{echo $_POST["name"];} ?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php if (empty($_POST["email"])) { echo " "; }else{echo $_POST["email"];}?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <input type="submit"  value="clik per inviare i dati">  
  <button type="reset" onclick="<?php canc(); ?>" >Reset</button>
</form>

</body>
</html>
