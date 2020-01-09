<?php 

require_once('LoginRegisterInc.php');
require_once('functions.php');
?>
<?php if(isloggedin()){
		
		header("location: index.php");
		exit();
	}?>








<!DOCTYPE html>
<html>
<head>
	<title>Pagrindinis</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Strait" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="pradinioStilius.css">
<style>


</style>
<body>


<section class="intro">
	<div class="inner">
		<div class="content">
					<img  class="img" src="logo.png"/>
<form class="prisijungti" method="post">
<h1>Registracija</h1>


<input type="text" pattern=".{0}|.{5,}" name="vardas" maxlength="16" placeholder="Slapyvardis" class="ivestis"
oninvalid="setCustomValidity('Slapyvardis privalo susidaryti bent iš 5 raidžių ar skaičių!')"
    onchange="try{setCustomValidity('')}catch(e){}" ><br>
<br>

<input type="email" name="email" placeholder="El.Paštas" class="ivestis"><br>
<br>

<input type="password" pattern=".{0}|.{5,}" maxlength="16" name="password" placeholder="Slaptažodis" class="ivestis"
oninvalid="setCustomValidity('Slaptažodis privalo susidaryti bent iš 8 raidžių ar skaičių!')"
    onchange="try{setCustomValidity('')}catch(e){}" ><br>

<br>
<input type="password" name="repeat_pass" pattern=".{0}|.{5,}" maxlength="16" placeholder="Pakartoti slaptažodį" class="ivestis"
oninvalid="setCustomValidity('Slaptažodis privalo susidaryti bent iš 8 raidžių ar skaičių!')"
    onchange="try{setCustomValidity('')}catch(e){}"><br>

<p>Paskyros tipas:</p>

 <input type="checkbox" name="check[]" value="SamdomasD"> Samdomas darbuotojas<br>
  <input type="checkbox" name="check[]" value="Darbdavys"> Darbdavys<br>
  <p>Jau esate užsiregistravęs?</p>
<a href="login.php">Prisijungimas</a>
  <br>
  <br>
   <?php if (isset($error1)){?><span class="errorbox"><?php echo $error1?></span><?php }?>
<input type="submit" class="kontaktuMygt" name="registruotis" value="Registruotis">
</form>


</div>
</div>

</section>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){

        $(".content").fadeIn(2000);
      //	$(".intro").fadeIn(2000).css("background", "url('two.jpg')");

    });
$('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});


</script>
</html>