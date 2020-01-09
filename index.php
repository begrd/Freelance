<!DOCTYPE html>
<html>
<head>
	<title>Pagr</title>
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
<h1>Freelancuok</h1>
<p>Esi freelanceris? prisijunk prie mūsų!</p>
<input type="submit" class="kontaktuMygt" name="submit" value="Prisijungti" id="login">
<p>Nesi narys? Registruokis!</p>
<input type="submit" class="kontaktuMygt" name="submit" value="Registruotis" id="register">

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
$("#login").click(function(){

window.location='login.php';


})
$("#register").click(function(){

window.location='register.php';


})
</script>
</html>