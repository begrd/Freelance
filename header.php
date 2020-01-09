<!DOCTYPE html>
<html>
<head>
   <?php //require_once('functions.php');
   include('LoginRegisterInc.php');
   include('DarbuKelimasInc.php');
   include('DarboSkelbimuKelimasInc.php');
   include('functions.php')
//include('extraFunkc.php');
   ?>
	<title>Pagrindinis</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="visasStyle.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<style>
.one{
display:none;

}
.two{
display:none;

}
.three{
display:none;

}
</style>
<body>

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="vartotojo.php" class="navbar-brand" ><img  class="logo" src="logo.png"></a>
    </div> 

    <ul class="nav navbar-nav">
       <?php  if(isloggedin()){
                      if(gautiVartDuom('tipas')=='SamdomasD'){
                        
                         echo '<li><a href="darbu_ikelimas.php">Įkelti darbą</a></li>';
                         echo '<li><a href="darbu_redagavimas.php">Redaguoti darbus</a></li>';
                         echo '<li><a href="darbu_perziura.php">Darbų peržiūra</a></li>';
                         echo '<li><a href="darboSkelbimu_perziura.php">Darbo skelbimų peržiūra</a></li>';
                         echo '<li><a href="cv_sablonai.php">CV šablonai</a></li>';
                      }else{
                         echo '<li><a href="darboSkelbimu_ikelimas.php">Skelbimų įkelimas</a></li>';
                         echo '<li><a href="darboSkelbimu_redagavimas.php">Skelbimų redagavimas</a></li>';
                         echo '<li><a href="darbu_perziura.php">Darbų peržiūra</a></li>';
                        
                              ?><?php
                      }
                    
                  }?>   
      <li><a href="katalogas.php"></a></li>
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    

    <?php  if(isloggedin()){
                      if(gautiVartDuom('tipas')=='SamdomasD'){
                        echo '<li><a href="vartotojo.php">Vartotojo paskyra</a></li>';
                      }else{
                        echo '
                        <li><a href="vartotojo.php">Vartotojo paskyra</a></li>';
                              ?><?php
                      }
                    echo '<li><a href="atsijungti.php">Atsijungti</a></li>';
                  }?>    

  
    </ul>
  </div>
</nav>


<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>



<section class="intro">
	<div class="inner">
		<div class="content">
<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 317 134.1" enable-background="new 0 0 317 134.1" xml:space="preserve">
<path class="one" fill="#154E60" d="M158.6,18.2v44.5h-29c-0.1,0-0.2-0.1-0.1-0.2L158.6,18.2C158.5,18.1,158.6,18.1,158.6,18.2z"/>
<path class="two" fill="#0D3144" d="M158.6,62.7v63.6c0,0.1-0.2,0.2-0.3,0.1l-28.9-63.4c0-0.1,0-0.2,0.1-0.2H158.6z"/>
<path class="three" fill="#093655" d="M187.5,63.3l-28.7,63c-0.1,0.1-0.3,0.1-0.3-0.1V62.7h28.5C187.4,62.7,187.7,63,187.5,63.3z"/>
</svg>
</div>
</div>
</section>




</div>
</div>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>

</body>
<script type="text/javascript">
  $(document).ready(function(){

        $(".one").fadeIn(2000);
      //  $(".intro").fadeIn(2000).css("background", "url('two.jpg')");
      $(".two").delay(600).fadeIn(2000);
      $(".three").delay(1200).fadeIn(2000);
    });
  $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
    </script>
</html>