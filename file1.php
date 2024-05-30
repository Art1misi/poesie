<!DOCTYPE html>

<html>
<head>
<title>form1 backend</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php require "prova.php"; ?>


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post"  action="fi.php">  

 Name: <input type="text" name="name" value="<?php if (empty($_POST["name"])) { echo " "; }else{echo $_POST["name"];} ?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php if (empty($_POST["email"])) { echo " "; }else{echo $_POST["email"];}?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php if (empty($_POST["website"])) { echo " "; }else{echo $_POST["website"];}?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40" ><?php if (empty($_POST["comment"])) { echo " "; }else{echo $_POST["comment"];}?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female" <?php if ($_POST["gender"]=="female") { echo  "checked"; }?> >Female
  <input type="radio" name="gender" value="male" <?php if ($_POST["gender"]=="male") { echo  "checked"; }?> >Male
  <input type="radio" name="gender" value="other" <?php if ($_POST["gender"]=="other") { echo  "checked"; }?> >Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit"  value="clik per inviare i dati">  
  <button type="reset" onclick="<?php canc(); ?>" >Reset</button>
</form>

</body>
</html>
