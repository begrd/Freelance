<?php include('header.php');?>







 <?php  if(isloggedin()){
                      if(gautiVartDuom('tipas')=='SamdomasD'){
                        echo '<div class="background">
<div class="V_Centras">
	<h1 class="V_H1"> Sveikas prisijungęs,'. gautiVartDuom('name').'</h1>


<input type="submit" class="kontaktuMygt" id="DK" name="darbuKelimas" value="Įkelti darbą">
<br>
<br>
<input type="submit" class="kontaktuMygt" id="RDK" name="registruotis" value="Redaguoti įkeltus darbus">
<br>
<br>
<input type="submit" class="kontaktuMygt" id="DP" name="registruotis" value="Darbų peržiūrą">
<br>
<br>
<input type="submit" class="kontaktuMygt"  id="DSP" name="registruotis" value="Darbo skelbimų peržiūrą">
<br>
<br>
<input type="submit" class="kontaktuMygt" name="registruotis" value="CV šablonai">
<br>
<br>
</div>
</div>';
                      }else{
                        echo '
                        <div class="background">
<div class="V_Centras">
	<h1 class="V_H1"> Sveikas prisijungęs,'. gautiVartDuom('name').' </h1>
<p>Įkelkite/redaguokite darbo skelbimus, bei peržiūrėkit samdomų darbuotojų įkeltus darbus!</p>

<input type="submit" class="kontaktuMygt" id="DSK" name="darbuKelimas" value="Įkelti darbo skelbimą">
<br>
<br>
<input type="submit" class="kontaktuMygt" id="RDS" name="registruotis" value="Redaguoti įkeltus darbo skelbimus">
<br>
<br>
<input type="submit" class="kontaktuMygt" id="DP" name="registruotis" value="Darbų peržiūrą">
<br>

<br>

<br>
</div>
</div>';
                             
                      }
                    echo '';
                  }?>  


<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</body>

<script type="text/javascript">

$("#DK").click(function(){

window.location='darbu_ikelimas.php';


})
$("#RDK").click(function(){

window.location='darbu_redagavimas.php';


})

$("#DP").click(function(){

window.location='darbu_perziura.php';


})


$("#DSK").click(function(){

window.location='darboSkelbimu_ikelimas.php';


})

$("#RDS").click(function(){

window.location='darboSkelbimu_redagavimas.php';


})

$("#DSP").click(function(){

window.location='darboSkelbimu_perziura.php';


})


</script>


<?php include('footer.php');?>