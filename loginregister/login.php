
<?php include('../loginregister/LoginRegisterInc.php');?>
<?php if(isloggedin()){
		ob_start();
		header("location: ../vartotojo.php");
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
		<img  class="img" src="/freelancer/logo.png"/>
<form class="prisijungti"  method="post" action="">
<h1>Prisijungimas</h1>
<br>
<input type="text" name="nick" class="ivestis" placeholder="Slapyvardis"

><br>
<br>
<br>

<input type="password" name="password" class="ivestis" placeholder="Slaptažodis"><br>
<br>
    <?php if (isset($error2)){?><span class="errorbox"><?php echo $error2?></span><?php }?>
<p>Dar nesate narys?</p>
<a href="register.php">Registracijos forma</a>
<br>
<br>
<input type="submit" class="kontaktuMygt" name="prisijungti" value="Prisijungti"/>
</form>



</div>
</div>
</section>
<script type="text/javascript" src="/freelancer/jquery-3.2.1.min.js"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){

        $(".content").fadeIn(2000);

    });


</script>
</html>

