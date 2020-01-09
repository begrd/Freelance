<!DOCTYPE html>
<html>
<head>
<title>Email sent!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="animate.css">
<link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Roboto" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <link rel="icon" type="image/jpg" href="titlelogo.jpg">
<style>
html,body{
font-family: 'Roboto';
	margin:0;
	padding:0;
	height:100%;
	width:100%;
}
.intro{

	height:100%;
	width:100%;
	margin:auto;
	background:url("kontaktuback2.jpg");
	display:table;
	top:0;
	background-size:cover;
}
.intro .inner{

	display:table-cell;
	vertical-align: middle;
	width:100%;
	max-width: none;
}
.content{

	max-width:500px;
	margin:0 auto;
	text-align: center;

}
.kontaktuMygt{

  background-color:white;
  border-radius:5px;
color:#8dc541;
border:1px solid #8dc541;


margin-bottom:40px;
width:150px;
height:50px;
padding:0px;
transition:all 2s;
}
 .kontaktuMygt:hover{
  background-color:#8dc541;
  color:white;
  border:1px solid white;
cursor:pointer;  

transition: all 1s;
width:200px;
}
</style>
	<title></title>
</head>
<body>
<section class="intro">
	<div class="inner">
		<div class="content">
<div class="alert alert-success" role="alert">
Darbas įkeltas</div>

<input type="submit" class="kontaktuMygt" name="submit" value="Įkelti dar viena darbą" onclick="function3()">
<input type="submit" class="kontaktuMygt" name="submit" value="Į vartotojo paskyrą" onclick="function4()">
</div>
</div>
</section>




</div>
</div>

</body>
<script type="text/javascript">
	
function	function3(){

	location.href="darbu_ikelimas.php"
}
function	function4(){

	location.href="vartotojo.php"
}
</script>
</html>